import React from 'react';
import './App.css';
import TodoList from "./ToDoList";
//import NewTask from "./NewTask";

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <a
          className="App-link"
          target="_blank"
          rel="noopener noreferrer"
        >
          Welcome to my ToDoList
        </a>
          <p>
              <TodoList/>
          </p>
      </header>
    </div>
  );
}

export default App;
