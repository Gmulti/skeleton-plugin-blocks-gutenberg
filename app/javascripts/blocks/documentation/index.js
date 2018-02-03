const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;

import CustomBlock from "./components/CustomBlock"

registerBlockType('guten/block-documentation', {
    title: __('Documentation'),
    icon: 'admin-page',
    category: 'common',
    keywords: [
        __('Documentation')
    ],
    edit: (props) => {
        return (
            <div>
                <h1>Documentation</h1>
                <CustomBlock title={"How create a block ?"} />
            </div>
        );
    },
    save: (props) => {
        return (
            <div>
                <h1>Documentation</h1>
                <CustomBlock title={"How create a block ?"} />
            </div>
        );
    },
});
