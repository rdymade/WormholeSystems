---
title: Alphanumeric alias convention
---

# Alphanumeric alias convention

The [standard convention](/documentation/bookmarking/why-this-system) numbers holes: `1, 2, 3`, then `21, 22, 23` inside the `2`. The **alphanumeric** scheme starts with unique NATO alphabet words for the first-level systems reached from an unaliased source system, then uses numbered child aliases. A manager can switch the whole map to an **alphanumeric** scheme in **Map settings → Mapping → Bookmark Format**.

This only changes what the mapper **suggests** going forward. Switching schemes never renames anything already on the map, and the schemes can coexist on a map that's mid-switch.

## The convention

- **The first level uses unique NATO alphabet words**: `ALPHA`, `BRAVO`, `DELTA`… `CHARLIE` is skipped because it can be confused with other labels. These aliases identify the first-level systems reached from the source system, and the words are unique across the map.
- **The second level uses the first-level alias's initial and a number**: holes inside `ALPHA` become `A1`, `A2`, `A3`; holes inside `BRAVO` become `B1`, `B2`, `B3`…
- **Deeper levels extend the numeric suffix**: the holes inside `B1` become `B11`, `B12`; the holes inside `B12` become `B121`, `B122`.
- **A dash is added after three numeric levels**: the holes inside `B121` become `B121-1`, `B121-2`…
- **Freed numbers are reused**: with `B1`, `B3` and `B4` on the map because `B2` was rolled and deleted, the next hole is suggested as `B2`.

## Example

The bookmark list reached from an unaliased source system:

```
*BRAVO
B1 ABC C3
B2 XYZ C5
B121 QWE C4
B121-1 RST J5A-IX Curse
```

`B1` and `B2` are separate first-level holes inside `BRAVO`. `B121-1` is the next level below `B121`, after three numeric levels have already been used.

## Switching schemes

Only **managers** can change the scheme, in the same **Bookmark Format** card used to [customize the bookmark template](/documentation/bookmarking/customizing-the-format). The change is shared by everyone on the map, propagating live like the rest of that card's settings.
