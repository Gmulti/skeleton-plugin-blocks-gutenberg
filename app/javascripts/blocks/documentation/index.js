const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;

import CreateBlock from "./components/CreateBlock"

registerBlockType('guten/block-documentation', {
    title: __('Documentation'),
    icon: 'shield',
    category: 'common',
    keywords: [
        __('Documentation')
    ],
    edit: (props) => {
        return (
            <div>
                <h1>Documentation</h1>
                <CreateBlock title={"How create a block ?"} />
            </div>
        );
    },
    save: (props) => {
        return (
            <div>
                <CreateBlock title={"How create a block ?"} />
                <h1>Documentation</h1>
            </div>
        );
    },
});
