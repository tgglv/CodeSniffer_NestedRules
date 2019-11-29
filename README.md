# CodeSniffer_NestedRules
Sample of how to combine PHP CodeSniffer Rules together.

As CodeSniffer can exclude (not include) sniffs from set of rules,
the solution of having two coupled sources of rules: stronger and weaker ones, 
is in having the whole set of rules and another one with will exclude specified rules from it. 


## Get Started

Before usage, get related sources via composer:
```bash
$ composer require woocommerce/woocommerce-sniffs
```

### How to run

### Full Rule Set

```bash
$ ./run-full-linter.sh
```

Will return the following list of errors:
```bash
FILE: ...ources/CodeSniffer_NestedRules/src/class-codesniffer-bad-style-sample.php
-------------------------------------------------------------------------------
FOUND 5 ERRORS AFFECTING 5 LINES
-------------------------------------------------------------------------------
  4 | ERROR | [x] Opening brace should be on the same line as the declaration
    |       |     for class CodeSniffer_Bad_Style_Sample
    |       |     (Generic.Classes.OpeningBraceSameLine.BraceOnNewLine)
  5 | ERROR | [x] Line indented incorrectly; expected at least 1 tabs, found
    |       |     0 (Generic.WhiteSpace.ScopeIndent.Incorrect)
  7 | ERROR | [ ] Visibility must be declared on method "__construct"
    |       |     (Squiz.Scope.MethodScope.Missing)
  8 | ERROR | [x] Opening brace should be on the same line as the
    |       |     declaration
    |       |     (Generic.Functions.OpeningFunctionBraceKernighanRitchie.BraceOnNewLine)
 10 | ERROR | [x] Expected 1 space(s) after FOR keyword; 0 found
    |       |     (Squiz.ControlStructures.ControlSignature.SpaceAfterKeyword)
-------------------------------------------------------------------------------
PHPCBF CAN FIX THE 4 MARKED SNIFF VIOLATIONS AUTOMATICALLY
-------------------------------------------------------------------------------
``` 

### Limited Rule Set

```bash
$ ./run-security-only-linter.sh
``` 
Will return nothing because all style related rules was excluded in `phpcs-security-only-linter.sh`.
