import React from 'react';
import ReactDOM from 'react-dom';

// Write code here:
const myList = (
<ul>
  <li>Get a job</li>
  <li>Get really good at a job</li>
</ul>
);

ReactDOM.render(
  myList,
  document.getElementById('app')
);
// class difference
const myDiv = (
<div className="big">I AM A BIG DIV</div>
);

ReactDOM.render(myDiv, document.getElementById('app'))

// onClick
// Call this extremely useful function on an <img>.
// The <img> will become a picture of a doggy.
e.target.setAttribute('src', 'https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-puppy.jpeg');
e.target.setAttribute('alt', 'doggy');
}

const kitty = (
<img
  src="https://s3.amazonaws.com/codecademy-content/courses/React/react_photo-kitty.jpg"
  alt="kitty"
  onClick={makeDoggy}/>
);

ReactDOM.render(kitty,
             document.getElementById('app'));
