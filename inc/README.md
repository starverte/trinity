Use this directory to place PHP files with functions that are not in `functions.php`

Remember to namespace ALL functions (i.e. `flint_` or `child_` with "child" being the name of the child theme)

### Functions that belong in `functions.php`
- Functions called by a WordPress action (i.e. `init`)
- Functions replacing or altering functions in Flint `functions.php` file
- `require` and `include` for files in `inc` directory

### Functions that belong in separate file in `inc` directory
- Functions called by a WordPress filter (place in a `filters.php` file)
- Functions called by a template file (place in a `template-tags.php` file)
- Functions within a class (create a file with the class name as the name of the file, prefixed with `class-`)
