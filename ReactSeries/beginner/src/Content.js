import React from 'react';
import { useState } from 'react';

const Content = () => {
    const [name, setName] = useState([
      {
        id:1,
        checked: false,
        item: "Item 2"
      },
      {
        id: 2,
        checked: false,
        item: "Item 2"
      },
      {
        id: 3,
        checked: false,
        item: "Item 3"
      }
    ]);
        
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