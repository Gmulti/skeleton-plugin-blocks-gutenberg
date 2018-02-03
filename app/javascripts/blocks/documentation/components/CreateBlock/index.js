import React, { Component, Fragment } from "react"
import PropTypes from "prop-types"

export class CreateBlock extends Component {

    render() {
        const { title } = this.props
        
        return (
            <Fragment>
                <h2>{title}</h2>
            </Fragment>
        )
    }
}

CreateBlock.propTypes = {
    title: PropTypes.string.isRequired
}

export default CreateBlock
