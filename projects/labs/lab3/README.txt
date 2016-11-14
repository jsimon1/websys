Jeremy Simon - Lab 3
Part 1 - Set up a recursion function goThroughDOM that concatonates to a outside variable and then steps through the children of any given node. Originally I tried to set up all childnodes as an array and for loop through the array, but for some reason that wasn't working so I decided to step through all children until nothing gets returned instead.

Part 2 - addEventListeners uses the addEventListener function that is called while iterating over all the element within body. In that call, a function with an alert is defined.

Part 3 - For the first part, I used cloneNode and appendChild. For the second part, like part 2, I iterate over the divs, and within that call I change the CSS.

Overall, I struggled with finding the right functions to call as selectors for certain elementsin the HTML. For example, I was using getElementById originally and couldn't figure out what was wrong. Obviouslly changing to getElementByTagName helped me in several parts of the lab.