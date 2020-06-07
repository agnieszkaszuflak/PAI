import React, { Component } from 'react';


function Filter (props){
    return (
        <div className="filtr">
            <input
                type="checkbox"
                checked={props.show}
                onChange={() => props.changeHide()}
            />
            <p>Hide completed</p>
        </div>
    )
}
export default Filter;