import React, { Component } from 'react';

export default class Tile extends Component {
    render() {
        return (<div className="tile"><img src={this.props.img} alt=''></img> <h2>{this.props.title}</h2>
        <div className="tileBottom"><p>{this.props.description}</p>
            <div className="tileHeartDate"><img src="img/heart.png" alt={this.props.featured?"Featured":""} className={this.props.featured?"tileHeartFeatured":""}></img><span className="tileDate">{this.props.date}</span></div>
        </div>
        </div>)
    }
}
