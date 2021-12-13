# digi-x-internship-assessment-lightbulb-effect
Description: Click the light bulb to turn on and off

Solution ideas:
Since a CSS class called 'bulb-on' (which will turn on the bulb) is already exist in *style.css*, we can do an approach where
we just replace the existing class 'bulb-off' to 'bulb-on' and vice-versa to turn on and turn off the bulb.


Solution steps:
1. Add javascript function 'changeState' by using `onclick="changeState()"` at line 13 - file changed -> *index.html*
2. In function 'changeState', use the `classList.toggle()` method to add the class 'bulb-on' - file changed -> *app.js*
3. Add CSS `#bulb {cursor: pointer;}` to change cursor display to pointer (increase accessibility) - file changed -> *style.css*


**ALERT** - This is the simplest solution but not the best since the 'bulb-off' class is not overwritten on click. This solution only toggling add and remove 'bulb-on' class.


Hosted at: [Light Bulb](https://digi-x.mangodev.com.my/light-bulb/)