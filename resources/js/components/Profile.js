import React, { Component } from 'react';

export default class Profile extends Component {
    render() {
        return (
            <div className='profileBubble'>
                <div className='profilePictureContainer'>
                    <img src={this.props.profile_picture} alt='Profile picture' className='profilePictureImage'></img>
                </div>
                <div className='profileTextContainer'>
                    <h1>{this.props.name}</h1>
                    <h2>Bio</h2>
                    <p>{this.props.bio}</p>
                </div>
                <div className='profileTextContainer'>
                    <h2>Phone</h2>
                    <span>{this.props.phone}</span>
                    <h2>Email</h2>
                    <span>{this.props.email}</span>
                </div>
            </div>
        );
    }

    componentDidMount(){
    }
}
