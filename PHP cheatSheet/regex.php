<?php
### Basic Regex Patterns
/*

1. Literals:
   - Match a specific character or sequence.
   - Example: `/abc/` matches "abc" in a string.

2. Character Classes:
   - `[...]` matches any single character within the brackets.
   - `[^...]` matches any single character NOT within the brackets.
   - Example: `/[aeiou]/` matches any vowel.

3. Quantifiers:
   - `*` matches 0 or more of the preceding element.
   - `+` matches 1 or more of the preceding element.
   - `?` matches 0 or 1 of the preceding element.
   - Example: `/a+/` matches one or more "a" characters.

4. Anchors:
   - `^` matches the start of a line.
   - `$` matches the end of a line.
   - Example: `/^start/` matches "start" only at the beginning of a line.

### Metacharacters

5. `.` (Dot):
   - Matches any character except a newline.
   - Example: `/a.b/` matches "axb" but not "a\nb".

6. `\` (Backslash):
   - Escapes a metacharacter, making it literal.
   - Example: `/a\.b/` matches "a.b" exactly.

7. `|` (Pipe):
   - Acts as an OR operator.
   - Example: `/apple|banana/` matches "apple" or "banana".

### Character Classes

8. `\d`:
   - Matches any digit (0-9).
   - Example: `/^\d{3}$/` matches a 3-digit number.

9. `\w`:
   - Matches any word character (letters, digits, underscores).
   - Example: `/^\w+$/` matches a single word.

10. `\s`:
    - Matches any whitespace character (space, tab, newline).
    - Example: `/^\s+/` matches leading whitespace.

### Grouping and Capturing

11. `() (Parentheses):
    - Groups expressions.
    - Captures matched text for later use.
    - Example: `/(abc)+/` captures and groups "abcabcabc".

12. `\n`** (Backreference):
    - Refers to a previously captured group.
    - Example: `/(a)\1/` matches "aa".

### Flags

13. `i` (Case-Insensitive):
    - Makes the pattern matching case-insensitive.
    - Example: `/apple/i` matches "Apple", "apple", etc.

14. `g` (Global):
    - Matches all occurrences in the input string.
    - Example: `/a/g` matches all "a" characters.

### Functions

15. `preg_match()`:
    - Searches for a pattern in a string.
    - Returns `true` if a match is found, `false` otherwise.

16. `preg_match_all()`:
    - Finds all matches of a pattern in a string.
    - Returns the number of matches found.

17. `preg_replace()`:
    - Replaces matches of a pattern in a string with a replacement.

18. `preg_split()`:
    - Splits a string into an array using a regex pattern as a delimiter.

*/