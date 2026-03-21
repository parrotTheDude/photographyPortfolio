#!/bin/bash
# ──────────────────────────────────────────────
# Generate responsive image variants for srcset
# Creates 640w, 1024w, and 1920w versions of
# every .webp image in public/images/
#
# Uses MD5 checksums to skip unchanged sources,
# so git pull updating timestamps won't cause
# unnecessary regeneration.
# ──────────────────────────────────────────────
set -e

SRC_DIR="$(cd "$(dirname "$0")/../public/images" && pwd)"
WIDTHS=(640 1024 1920)
HASH_DIR="$SRC_DIR/.image-hashes"
mkdir -p "$HASH_DIR"

generated=0
skipped=0

find "$SRC_DIR" -type f -name "*.webp" \
    ! -name "*-640w.webp" \
    ! -name "*-1024w.webp" \
    ! -name "*-1920w.webp" | while read -r img; do

    dir="$(dirname "$img")"
    base="$(basename "$img" .webp)"
    rel="$(realpath --relative-to="$SRC_DIR" "$img")"

    # Hash file to detect actual content changes
    hash_file="$HASH_DIR/${rel//\//__}.md5"
    current_hash=$(md5sum "$img" | cut -d' ' -f1)

    # If hash matches and all variants exist, skip entirely
    if [ -f "$hash_file" ] && [ "$(cat "$hash_file")" = "$current_hash" ]; then
        all_exist=true
        for w in "${WIDTHS[@]}"; do
            if [ ! -f "${dir}/${base}-${w}w.webp" ]; then
                all_exist=false
                break
            fi
        done
        if $all_exist; then
            skipped=$((skipped + 1))
            continue
        fi
    fi

    src_width=$(identify -format "%w" "$img" 2>/dev/null || echo "0")

    for w in "${WIDTHS[@]}"; do
        out="${dir}/${base}-${w}w.webp"

        if [ "$src_width" -le "$w" ] && [ "$src_width" -gt 0 ]; then
            cp "$img" "$out"
        else
            convert "$img" -resize "${w}x>" -quality 82 "$out"
        fi
    done

    # Save hash so next run skips this file
    echo "$current_hash" > "$hash_file"
    generated=$((generated + 1))
done

echo "--- Responsive images generated. ($generated processed, $skipped unchanged)"
