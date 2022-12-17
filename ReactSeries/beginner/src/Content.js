import React from 'react'

const Content = () => {
    const callingRandomNames = () => {
        const names = ['Ibrahim','Mustafa','Waseem'];
        const int = Math.floor(Math.random() * 3);
        return names[int];
      }
  return (
    <main>
        <p>
          Hello {callingRandomNames()}!
        </p>
    </main>
  )
}

export default Content