import React, { Component } from 'react';
import Tile from './Tile'

export default class Tiles extends Component {
    render() {
        //const tiles = JSON.stringify(this.props.album)//this.props.album.map(landscape => (<div key={landscape.id} title={landscape.title} description={landscape.description} img={landscape.img} date={landscape.date} featured={landscape.featured}></div>))
        //return this.props.album?(<Tile></Tile>):<div>Nothing</div> //OK
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
            //OK
                //return <div>{this.props.album?tiles: "Nothing"}</div>
        //return this.props.album?(<div>{this.props.album.map(landscape => <Tile key={landscape.id} title={landscape.title} description={landscape.description} img={landscape.img} date={landscape.date} featured={landscape.featured}></Tile>)}</div>):(<div>Empty</div>)
    }
}
