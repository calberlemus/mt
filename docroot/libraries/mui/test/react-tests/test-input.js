/**
 * MUI test react input component
 * @module test/react-tests/test-input
 */

import assert from 'assert';
import React from 'react';
import ReactDOM from 'react-dom';
import ReactUtils from 'react-addons-test-utils';

import Input from '../../src/react/input';


describe('react/input', function() {
  let errFn;


  before(function() {
    errFn = console.error;
    console.error = function(msg) {throw Error(msg);};
  });


  after(function() {
    console.error = errFn;
  });


  it('renders wrapper properly', function() {
    let instance = ReactUtils.renderIntoDocument(<Input></Input>);
    let wrapperEl = ReactDOM.findDOMNode(instance);

    assert.equal(wrapperEl.tagName, 'DIV');
    assert.equal(wrapperEl.className.trim(), 'mui-textfield');
  });


  it('renders component with defaultValue properly', function() {
    let elem = <Input defaultValue="my input"></Input>;
    let instance = ReactUtils.renderIntoDocument(elem);
    let inputEl = ReactUtils
      .findRenderedDOMComponentWithTag(instance, 'input');

    // check input element value
    assert.equal(inputEl.value, 'my input');

    // check empty/not-empty classes
    assert.equal(/mui--is-empty/.test(inputEl.className), false);
    assert.equal(/mui--is-not-empty/.test(inputEl.className), true);
  });


  it('renders component with integer defaultValue', function() {
    let elem = <Input defaultValue={0}></Input>;
    let instance = ReactUtils.renderIntoDocument(elem);
    let inputEl = ReactUtils
      .findRenderedDOMComponentWithTag(instance, 'input');

    // check input element value
    assert.equal(inputEl.value, 0);

    // check empty/not-empty classes
    assert.equal(/mui--is-empty/.test(inputEl.className), false);
    assert.equal(/mui--is-not-empty/.test(inputEl.className), true);
  });


  it('renders component with defaultValue received by update', function() {
    const ParentClass = React.createClass({
      getInitialState() {
        return { testState: 'init' };
      },
      render() {
        return <Input defaultValue="my input"></Input>;
      },
    });
    
    const parentElem = <ParentClass></ParentClass>;
    const parentInstance = ReactUtils.renderIntoDocument(parentElem);
    const instance = ReactUtils.findRenderedComponentWithType(parentInstance,
                                                              Input);
    const inputEl = ReactUtils.findRenderedDOMComponentWithTag(instance,
                                                               'input');
    
    // check input element value
    assert.equal(inputEl.value, 'my input');
    
    // check empty/not-empty classes
    assert.equal(/mui--is-empty/.test(inputEl.className), false);
    assert.equal(/mui--is-not-empty/.test(inputEl.className), true);
    
    // changing state calls componentWillReceiveProps()
    parentInstance.setState({ testState: 'new' });
    
    // check input element value
    assert.equal(inputEl.value, 'my input');
    
    // check empty/not-empty classes
    assert.equal(/mui--is-empty/.test(inputEl.className), false);
    assert.equal(/mui--is-not-empty/.test(inputEl.className), true);
  });


  it('properly renders instance classes', function() {
    let instance = ReactUtils.renderIntoDocument(<Input></Input>);
    let inputEl = ReactUtils
      .findRenderedDOMComponentWithTag(instance, 'input');

    // starts with empty|pristine|untouched classes
    assert.equal(/mui--is-empty/.test(inputEl.className), true);
    assert.equal(/mui--is-not-empty/.test(inputEl.className), false);
    assert.equal(/mui--is-untouched/.test(inputEl.className), true);
    assert.equal(/mui--is-touched/.test(inputEl.className), false);
    assert.equal(/mui--is-pristine/.test(inputEl.className), true);
    assert.equal(/mui--is-dirty/.test(inputEl.className), false);

    // replaces `untouched` with `touched` on blur
    ReactUtils.Simulate.blur(inputEl);
    assert.equal(/mui--is-empty/.test(inputEl.className), true);
    assert.equal(/mui--is-not-empty/.test(inputEl.className), false);
    assert.equal(/mui--is-untouched/.test(inputEl.className), false);
    assert.equal(/mui--is-touched/.test(inputEl.className), true);
    assert.equal(/mui--is-pristine/.test(inputEl.className), true);
    assert.equal(/mui--is-dirty/.test(inputEl.className), false);

    // replaces `pristine` with `dirty` on user input
    ReactUtils.Simulate.change(inputEl);
    assert.equal(/mui--is-empty/.test(inputEl.className), true);
    assert.equal(/mui--is-not-empty/.test(inputEl.className), false);
    assert.equal(/mui--is-untouched/.test(inputEl.className), false);
    assert.equal(/mui--is-touched/.test(inputEl.className), true);
    assert.equal(/mui--is-pristine/.test(inputEl.className), false);
    assert.equal(/mui--is-dirty/.test(inputEl.className), true);
  });


  it('executes onBlur callback', function(done) {
    let callbackFn = function(ev) {
      done();
    };

    let instance = ReactUtils.renderIntoDocument(
        <Input onBlur={callbackFn}>
        </Input>
    );

    let inputEl = ReactUtils
      .findRenderedDOMComponentWithTag(instance, 'input');

    // simulate blur
    ReactUtils.Simulate.blur(inputEl);
  });


  it('adds and removes mui--is-empty classes', function() {
    var TestApp = React.createClass({
      getInitialState: function() {
        return {value: this.props.value};
      },
      onChange: function(ev) {
        this.setState({value: ev.target.value});
      },
      render: function() {
        return (
          <Input
            value={this.state.value}
            onChange={this.onChange}
          />
        );
      }
    });

    let elem = <TestApp value="" />;
    let instance = ReactUtils.renderIntoDocument(elem);
    let findComponent = ReactUtils.findRenderedDOMComponentWithTag;
    let inputEl = findComponent(instance, 'input');

    // check empty classes
    assert.equal(/mui--is-empty/.test(inputEl.className), true);
    assert.equal(/mui--is-not-empty/.test(inputEl.className), false);

    // add input value and check classes
    instance.setState({value: 'test'});
    assert.equal(/mui--is-empty/.test(inputEl.className), false);
    assert.equal(/mui--is-not-empty/.test(inputEl.className), true);

    // remove input classes and check classes
    instance.setState({value: ''});
    assert.equal(/mui--is-empty/.test(inputEl.className), true);
    assert.equal(/mui--is-not-empty/.test(inputEl.className), false);
  });


  it('does controlled component validation', function() {
    // raises error when `value` defined and `onChange missing
    assert.throws(
      function() {
        let elem = <Input value="my value"></Input>;
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
          <Input
            value={this.state.value}
            onChange={this.onChange}
          />
        );
      }
    });

    let elem = <TestApp value="test" />;
    let instance = ReactUtils.renderIntoDocument(elem);
    let findComponent = ReactUtils.findRenderedDOMComponentWithTag;
    let inputEl = findComponent(instance, 'input');

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


  it('handles label unmount gracefully', function() {
    let elem = <Input label="label" defaultValue="defaultValue"></Input>;
    let instance = ReactUtils.renderIntoDocument(elem);
    let wrapperEl = ReactDOM.findDOMNode(instance);

    ReactDOM.unmountComponentAtNode(wrapperEl.parentNode);

    // TODO: How can we access the timer id to check if it was removed
    //       successfully?
    assert.equal(true, true);
  });
});
