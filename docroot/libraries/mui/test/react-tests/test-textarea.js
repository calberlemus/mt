/**
 * MUI test react textinput library
 * @module test/react-tests/test-textinput
 */

import assert from 'assert';
import React from 'react';
import ReactDOM from 'react-dom';
import ReactUtils from 'react-addons-test-utils';

import Textarea from '../../src/react/textarea';

import { getShallowRendererOutput } from '../lib/react-helpers';


describe('react/textarea', function() {
  // capture console error messages
  let errFn, elem;


  before(function() {
    errFn = console.error;
    console.error = function(msg) {throw Error(msg);};
  });


  after(function() {
    console.error = errFn;
  });


  beforeEach(function() {
    elem = <Textarea defaultValue="my input"></Textarea>;
  });


  it('renders wrapper properly', function() {
    let instance = ReactUtils.renderIntoDocument(elem);
    let wrapperEl = ReactDOM.findDOMNode(instance);

    assert.equal(wrapperEl.tagName, 'DIV');
    assert.equal(wrapperEl.className.trim(), 'mui-textfield');
  });


  it('renders native textarea element', function() {
    let instance = ReactUtils.renderIntoDocument(elem);

    let fn = ReactUtils.findRenderedDOMComponentWithTag;
    let textareaEl = fn(instance, 'textarea');

    assert.equal(textareaEl.textContent, 'my input');
  });


  it('does controlled component validation', function() {
    // raises error when `value` defined and `onChange missing
    assert.throws(
      function() {
        let elem = <Textarea value="my value"></Textarea>;
        let instance = ReactUtils.renderIntoDocument(elem);
      },
      /MUI Warning/
    );
  });


  it('can be used as controlled component', function() {
    var TestApp = React.createClass({
      getInitialState: function() {
        return {value: this.props.value};
      },
      onChange: function(ev) {
        this.setState({value: ev.target.value});
      },
      render: function() {
        return (
          <Textarea
            value={this.state.value}
            onChange={this.onChange}
          />
        );
      }
    });

    let elem = <TestApp value="test" />;
    let instance = ReactUtils.renderIntoDocument(elem);
    let findComponent = ReactUtils.findRenderedDOMComponentWithTag;
    let inputEl = findComponent(instance, 'textarea');

    // check default value
    assert.equal(inputEl.value, 'test');

    // update TestApp and check inputEl value
    instance.setState({value: 'test2'});
    assert.equal(inputEl.value, 'test2');

    // update inputEl and check state
    inputEl.value = 'test3';
    ReactUtils.Simulate.change(inputEl);
    assert.equal(instance.state.value, 'test3');
  });
});
