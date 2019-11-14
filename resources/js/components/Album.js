import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Profile from './Profile'
import Tiles from './Tiles'

export default class Album extends Component {
    render() {
        return (
            <div className="mainBackgroundLinear">
                <div className="mainBackgroundRadial">
                    <Profile></Profile>
                    <Tiles></Tiles>
                </div>
            </div>
        );
    }

    componentDidMount() {
        fetch("landscapes.json")
            .then(res => res.json())
            .then(
                (result) => {
                    //alert(JSON.stringify(result))
                    this.setState({
                        isLoaded: true,
                        items: result.items
                    });
                },
                // Note: it's important to handle errors here
                // instead of a catch() block so that we don't swallow
                // exceptions from actual bugs in components.
                (error) => {
                    /*
                    this.setState({
                    isLoaded: true,
                    error
                    });*/
                }
            )
    }
}

if (document.getElementById('root')) {
    ReactDOM.render(<Album />, document.getElementById('root'));
}