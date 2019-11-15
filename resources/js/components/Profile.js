import React, { Component } from 'react';

export default class Profile extends Component {
    render() {
        return (
            <div className='profileSection'>
                <div className='profileSectionPictureContainer'>
                    <img src={this.props.profile_picture} alt='Profile picture' className='profileSectionPicture'></img>
                </div>
                <div className='profileSectionTextContainer'>
                    <div className='profileSectionName'>
                        <h1>{this.props.name}</h1>
                    </div>
                    <div className='profileSectionDetails'>
                        <div className='profileSectionDetailsTextContainer profileSectionDetailsBio'>
                            <h2>Bio</h2>
                            <p>{this.props.bio}</p>
                        </div>
                        <div className='profileSectionDetailsTextContainer'>
                            <h2>Phone</h2>
                            <span>{this.props.phone}</span>
                            <h2>Email</h2>
                            <span>{this.props.email}</span>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
