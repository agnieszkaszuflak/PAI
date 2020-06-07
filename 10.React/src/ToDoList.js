import React from 'react';
import TodoItems from "./todosData";
import Filter from "./Filter";

class TodoList extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            items: []

        };
        this.show = false;
        this.number = 0;
        this.addItem = this.addItem.bind(this);
        this.handleChange = this.handleChange.bind(this)
        this.changeHide =  this.changeHide.bind(this)

    }

    addItem(e) {
        var itemArray = this.state.items;

        if (this._inputElement.value !== "") {
            itemArray.unshift(
                {
                    text: this._inputElement.value,
                    id: this.number,
                    completed: false
                }
            );
            this.number = this.number + 1
            this.setState({
                items: itemArray
            });

            this._inputElement.value = "";
        }
        console.log(itemArray);
        e.preventDefault();
    }

    handleChange(id) {
        this.setState(prevState => {
            const updatedTodos = prevState.items.map(todo => {
                if (todo.id === id) {
                    todo.completed = !todo.completed
                }
                return todo
            })
            return {
                items: updatedTodos
            }
        })
    }

    changeHide() {
        this.setState(prevState => {
            this.show = !this.show
        })

    };


    render() {
        const todoItems = this.state.items.map(item => <TodoItems id = {item.id} item={item} handleChange={this.handleChange} show={this.show} />)
        return (
            <div className="todoListMain">
                <div className="header">
                    <input
                        type="checkbox"
                        onClick={this.changeHide}
                    />
                    <p>Hide completed</p>
                    {todoItems}
                    <form onSubmit={this.addItem}>
                        <input ref={(a) => this._inputElement = a}
                               placeholder="enter task" >
                        </input>
                        <button type="submit">add</button>
                    </form>
                </div>

            </div>
        );
    }
}

export default TodoList;