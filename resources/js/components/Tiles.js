import React, { Component } from 'react';
import Tile from './Tile'

export default class Tiles extends Component {
    render() {
        return (<div className='tiles'>
            {
                this.props.album
                ?
                (
                    this.props.album.map
                    (
                        landscape => <Tile key={landscape.id} title={landscape.title} description={landscape.description} img={landscape.img} date={landscape.date} featured={landscape.featured}></Tile>
                    )
                ):
                (<div className='tiles'></div>)
            }
            </div>
            );
    }
}
