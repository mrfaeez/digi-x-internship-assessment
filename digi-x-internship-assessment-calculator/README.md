# digi-x-internship-assessment-calculator
Description: Fix/debug the calculator where the expression and answer is wrong.

Solution ideas:
There is a mistaken in expression in the current code. When capturing the input value, should concate the inputs or the expression (numbers and symbol) by using + symbol. Then, simply assign the value to show in the screen.


Solution Steps:
1. Fix expression `screen.value = value` to `screen.value += value` at line line 11 in *app.js*
2. Fix expression `screen.value += answer` to `screen.value = answer` at line line 11 in *app.js*

**ALERT** - This is not the best practice since `eval()` method is used. The method is used to execute expression in Javascript (despite being string). The method has a big security risk because it can be exploited by running malicious code using the method. Source: [w3schools - JavasSript eval()](https://www.w3schools.com/jsref/jsref_eval.asp)