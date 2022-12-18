import React from 'react';
import { useState } from 'react';

const Content = () => {
    const [name, setName] = useState('Ibrahim');
    const [count, setCount] = useState(0);
    const callingRandomNames = () => {
        const names = ['Ibrahim','Mustafa','Waseem'];
        const int = Math.floor(Math.random() * 3);
        setName(names[int]);
      }

    const handleClick = () => {
      console.log(name)
    }

    const handleClick2 = () => {
      setCount(count + 1)
      console.log(count)
    }

        
  return (
    <main>
        <p onDoubleClick={handleClick}>
          Hello {name}!
        </p>
        <button onClick={callingRandomNames}>Clicke Here to Change Name</button>
        <button onClick={ () => handleClick2 ('Ibrahim')}>Click Here for Counting</button>
    </main>
  )
}

export default Content