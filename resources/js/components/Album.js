import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Profile from './Profile'
import Tiles from './Tiles'

export default class Album extends Component {
    constructor(props){
        super(props)
        this.state = {}
    }
    render() {
        return (
            <div className="mainBackgroundLinear">
                <div className="mainBackgroundRadial">
                    <Profile profile_picture={this.state.profile_picture} name={this.state.name} phone={this.state.phone} email={this.state.email} bio={this.state.bio}></Profile>
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
                    this.setState(result);
                },
                // Note: it's important to handle errors here
                // instead of a catch() block so that we don't swallow
                // exceptions from actual bugs in components.
                (error) => {
                    this.setState(
                        {
                        }
                    )
                    ;
                }
            )
    }
}

if (document.getElementById('root')) {
    ReactDOM.render(<Album />, document.getElementById('root'));
}
