import React, { Component } from 'react';

export default class Tile extends Component {
    render() {
        return (<div className="tile"><img src={this.props.img} alt=''></img> {this.props.title}</div>)
    }
}
