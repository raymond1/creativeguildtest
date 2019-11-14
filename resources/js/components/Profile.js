import React, { Component } from 'react';

export default class Profile extends Component {
    render() {
        return (
            <div className='profileBubble'>
                <img src={this.props.image}></img>
            </div>
        );
    }

    componentDidMount(){
    }
}
