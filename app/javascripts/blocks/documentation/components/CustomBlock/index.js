import React, { Component, Fragment } from "react"
import PropTypes from "prop-types"

function readonly(target, key, descriptor){
    descriptor.writable = false;
    return descriptor
}

export class CustomBlock extends Component {

    @readonly
    cantChange = "Can't change this var"
    
    exampleVar = "Example var";

    changeVarCantChange = () => {
        console.log("You can't, i'm readonly");
        this.cantChange = "Oh ?"
    }

    changeVarExampleVar = () => {
        console.log("You can");
        this.exampleVar = "Oh ?"
    }

    render() {
        const { title } = this.props
        
        return (
            <Fragment>
                <h2>{title}</h2>
                <p>This variable does not come from the state : {this.exampleVar}</p>

                <h3>Decorators</h3>
                <button onClick={this.changeVarCantChange}>
                    Change var "cantChange" ? (open console.log)
                </button>

                <button onClick={this.changeVarExampleVar}>
                    Change var "exampleVar? (open console.log)
                </button>

            </Fragment>
        )
    }
}

CustomBlock.propTypes = {
    title: PropTypes.string.isRequired
}

export default CustomBlock
