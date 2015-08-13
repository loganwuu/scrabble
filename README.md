# Scrabble Score

##### A Scrabble Score-returning app built using BDD methodology. 8/13/2015

#### By Logan Wu

## Description
The app takes a word and returns the Scrabble score for that word.

## Technologies Used

PHP, HTML, CSS, Silex, Twig, PHPUnit, Composer

## Specs

1. If user enters A, it should return score 1.
  * Input: "A"
  * Output: 1

2. If user enters A, E, I, O, U, L, N, R, S, T, it should return score 1.
  * Input: "A, E, I, O, U, L, N, R, S, T"
  * Output: 1

3. If user enters D,G, it should return score 2.
  * Input: "D,G"
  * Output: 2

4. If user enters B, C, M, P, it should return score 3.
  * Input: "B, C, M, P"
  * Output: 3

5. If user enters F, H, V, W, Y , it should return score 4.
  * Input: "F, H, V, W, Y"
  * Output: 4

6. If user enters K, it should return score 5.
  * Input: "K"
  * Output: 5

7. If user enters J, X, it should return score 8.
  * Input: "J, X"
  * Output: 8

8. 7. If user enters Q, Z, it should return score 10.
  * Input: "Q, Z"
  * Output: 10

## Legal

Copyright (c) 2015 **Logan Wu**

This software is licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
