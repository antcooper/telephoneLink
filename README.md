# Telephone Link Twig filter

Convert a plain text phone number to one that can be used as a link. Assumes numbers starting with 0 are UK based.

## Example
`<a href='{{ globals.telephone|telephoneLink }}'>{{ globals.telephone }}</a>` outputs `<a href='tel:+441555123456'>01555 123456</a>`

## Changelog

### 1.0

* Initial release
