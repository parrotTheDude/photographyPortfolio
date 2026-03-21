#!/bin/bash
# ──────────────────────────────────────────────
# Generate responsive image variants for srcset
# Creates 640w, 1024w, and 1920w versions of
# every .webp image in public/images/
# ──────────────────────────────────────────────
set -e

SRC_DIR="$(cd "$(dirname "$0")/../public/images" && pwd)"
WIDTHS=(640 1024 1920)

echo "--- Generating responsive images..."

find "$SRC_DIR" -type f -name "*.webp" | while read -r img; do
    dir="$(dirname "$img")"
    base="$(basename "$img" .webp)"

    for w in "${WIDTHS[@]}"; do
        out="${dir}/${base}-${w}w.webp"

        # Skip if already generated and newer than source
        if [ -f "$out" ] && [ "$out" -nt "$img" ]; then
            continue
        fi

        # Only resize if source is wider than target
        src_width=$(identify -format "%w" "$img" 2>/dev/null || echo "0")
        if [ "$src_width" -le "$w" ] && [ "$src_width" -gt 0 ]; then
            # Source is smaller than target — just copy/symlink
            if [ ! -f "$out" ]; then
                cp "$img" "$out"
            fi
        else
            convert "$img" -resize "${w}x>" -quality 82 "$out"
        fi
    done
done

echo "--- Responsive images generated."
