# PHP Type Juggling Bug
This repository demonstrates a common yet subtle bug in PHP related to type juggling in arithmetic operations.  The `calculateSum` function intends to calculate the sum of an array of numbers. However, due to loose typing, the presence of a string within the array causes unexpected behavior. This example highlights the importance of type checking and strict type handling in PHP to prevent such errors.