import React from 'react';
import ReactDOM from 'react-dom';
import CreateBlock from './index.js';

it('renders without crashing', () => {
    const div = document.createElement('div');
    ReactDOM.render(<CreateBlock title="Hi" />, div);
});
