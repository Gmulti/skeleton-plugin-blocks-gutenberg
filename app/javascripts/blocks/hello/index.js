const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks

import styles from "./index.scss"

registerBlockType( 'guten/block-hello', {
	title: __( 'Hello' ),
	icon: 'shield',
	category: 'common',
	keywords: [
		__( 'Hello example' )
	],
	edit: ( props ) => {
		return (
			<div>
				<p>Hello World</p>
                <div className={styles.layout}>
                    You can use ES7, decorators and CSS Modules
                </div>
			</div>
		);
	},
	save: ( props ) => {
		return (
            <div>
                <p>Hello World</p>
                <div className={styles.layout}>
                    You can use ES7, decorators and CSS Modules
                </div>
            </div>
		);
	},
} );
