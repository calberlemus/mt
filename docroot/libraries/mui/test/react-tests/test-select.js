/**
 * MUI test react select library
 * @module test/react-tests/test-select
 */

import assert from 'assert';
import React from 'react';
import ReactUtils from 'react-addons-test-utils';

import Option from '../../src/react/option';
import Select from '../../src/react/select';

import { getShallowRendererOutput } from '../lib/react-helpers';


describe('react/select', function() {
  let elem, errFn;


  before(function() {
    errFn = console.error;
    console.error = function(msg) {throw Error(msg);};
  });


  after(function() {
    console.error = errFn;
  });


  beforeEach(function() {
    elem = (
      <Select>
        <Option label="Option 1" />
        <Option label="Option 2" />
        <Option label="Option 3" />
      </Select>
    );
  });


  it('renders wrapper properly', function() {
    let result = getShallowRendererOutput(elem);

    assert.equal(result.type, 'div');
    assert.equal(result.props.className, 'mui-select ');
  });


  it('renders native select element', function() {
    let instance = ReactUtils.renderIntoDocument(elem);
    let wrapperEl = instance.refs.wrapperEl;

    // check that select element is only child
    assert.equal(wrapperEl.children[0].tagName, 'SELECT');
  });


  it('supports dynamic list of children', function() {
    let instance = ReactUtils.renderIntoDocument(
      <Select>
        {
          [1, 2, 3].map(function(val, i) {
            return <Option key={i} value={val} />;
          })
        }
      </Select>
    );

    // get options
    let optionEls = ReactUtils
      .scryRenderedDOMComponentsWithTag(instance, 'option');

    // check number
    assert.equal(optionEls.length, 3);

    // check content
    [1, 2, 3].map(function(val, i) {
      assert.equal(optionEls[i].value, val);
    });
  });


  it('supports mixed static and dynamic children', function() {
    let instance = ReactUtils.renderIntoDocument(
      <Select>
        <Option value={0} />
        {
          [1, 2, 3].map(function(val, i) {
            return <Option key={i} value={val} />;
          })
        }
      </Select>
    );

    // get options
    let optionEls = ReactUtils
      .scryRenderedDOMComponentsWithTag(instance, 'option');

    // check number
    assert.equal(optionEls.length, 4);

    // check content
    [0, 1, 2, 3].map(function(val, i) {
      assert.equal(optionEls[i].value, val);
    });
  });


  it('renders properly with additional classNames', function() {
    let result = getShallowRendererOutput(
      <Select className="additional">
        test
      </Select>
    );

    assert.equal(result.props.className, 'mui-select additional');
  });


  it('renders properly with additional styles', function() {
    let result = getShallowRendererOutput(
      <Select style={{additional: 'style'}}>
        test
      </Select>
    );

    assert.equal(result.props.style.additional, 'style');
  });


  it('renders tabIndex properly', function() {
    let instance

    // useDefault is false
    instance = ReactUtils.renderIntoDocument(<Select></Select>);
    assert.equal(instance.refs.wrapperEl.tabIndex, 0);
    assert.equal(instance.refs.selectEl.tabIndex, -1);

    // useDefault is true
    instance = ReactUtils.renderIntoDocument(
        <Select useDefault={true}></Select>
    );
    assert.equal(instance.refs.wrapperEl.tabIndex, -1);
    assert.equal(instance.refs.selectEl.tabIndex, 0);
  });


  it('renders name attribute properly', function() {
    let testElem = (
      <Select name="my-name">
        <Option value="value1" label="Option 1" />
        <Option value="value2" label="Option 2" />
        <Option value="value3" label="Option 3" />
      </Select>
    );

    let instance = ReactUtils.renderIntoDocument(testElem);
    let selectEl = instance.refs.selectEl;

    assert.equal(selectEl.name, 'my-name');
  });


  it('handles default undefined value', function() {
    let testElem = (
      <Select>
        <Option value="value1" label="Option 1" />
        <Option value="value2" label="Option 2" />
        <Option value="value3" label="Option 3" />
      </Select>
    );

    let instance = ReactUtils.renderIntoDocument(testElem);
    let selectEl = instance.refs.selectEl;

    assert.equal(selectEl.value, 'value1');
  });


  it('handles defaultValue for uncontrolled component', function() {
    let testElem = (
      <Select defaultValue="value2">
        <Option value="value1" label="Option 1" />
        <Option value="value2" label="Option 2" />
        <Option value="value3" label="Option 3" />
      </Select>
    );

    let instance = ReactUtils.renderIntoDocument(testElem);
    let selectEl = instance.refs.selectEl;

    assert.equal(selectEl.value, 'value2');
  });


  it('does controlled component validation', function() {
    // raises error when `value` defined and `onChange missing
    assert.throws(
      function() {
        let elem = <Select value="my value"></Select>;
        let instance = ReactUtils.renderIntoDocument(elem);
      },
      /MUI Warning/
    );
  });


  it('can be used as a controlled component', function() {
    var TestApp = React.createClass({
      getInitialState: function() {
        return {value: this.props.value};
      },
      onChange: function(ev) {
        this.setState({value: ev.target.value});
      },
      render: function() {
        return (
          <Select
            ref="innerEl"
            value={this.state.value}
            onChange={this.onChange}
          >
            <Option value="option-1" />
            <Option value="option-2" />
          </Select>
        );
      }
    });

    let elem = <TestApp value="option-2" />;
    let instance = ReactUtils.renderIntoDocument(elem);
    let innerEl = instance.refs.innerEl;

    // check default inner value
    assert.equal(innerEl.state.value, 'option-2');

    // update outer and check <select> element
    instance.setState({value: 'option-1'});
    assert.equal(innerEl.refs.selectEl.value, 'option-1');

    // update <select> element and trigger 'change' event
    innerEl.refs.selectEl.value = 'option-2';
    ReactUtils.Simulate.change(innerEl.refs.selectEl);
    assert.equal(instance.state.value, 'option-2');
  });


  it('handles blur on wrapper <div> properly', function(done) {
    let onBlur = function(ev) {
      assert.equal(ev.type, 'blur');
      assert.equal(ev.target, instance.refs.wrapperEl);
      done();
    };

    let instance = ReactUtils.renderIntoDocument(
      <Select onBlur={onBlur}></Select>
    );

    // trigger 'blur' on wrapper <div> element
    ReactUtils.Simulate.blur(instance.refs.wrapperEl);
  });


  it('handles change event on <select> properly', function(done) {
    let checkChangeFn = function(ev) {
      assert.equal(ev.type, 'change');
      assert.equal(ev.target, instance.refs.selectEl);
      assert.equal(ev.target.value, "value2");
      done();
    }

    let instance = ReactUtils.renderIntoDocument(
      <Select defaultValue="value2" onChange={checkChangeFn}>
        <Option value="value1" label="Option 1" />
        <Option value="value2" label="Option 2" />
      </Select>
    );

    // trigger 'change' on inner <select> element
    ReactUtils.Simulate.change(instance.refs.selectEl);
  });


  it('handles click on inner <select> properly', function(done) {
    let onClick = function(ev) {
      assert.equal(ev.type, 'click');
      assert.equal(ev.target, instance.refs.selectEl);
      done();
    };

    let instance = ReactUtils.renderIntoDocument(
      <Select onClick={onClick}></Select>
    );

    // trigger 'click' on inner <select> element
    ReactUtils.Simulate.click(instance.refs.selectEl, {button: 0});
  });


  it('handles focus on inner <select> properly', function(done) {
    let onFocus = function(ev) {
      assert.equal(ev.type, 'focus');
      assert.equal(ev.target, instance.refs.selectEl);
      done();
    };

    let instance = ReactUtils.renderIntoDocument(
      <Select onFocus={onFocus}></Select>
    );

    // trigger 'focus' on inner <select> element
    ReactUtils.Simulate.focus(instance.refs.selectEl);
  });


  it('handles focus on wrapper <div> properly', function(done) {
    let onFocus = function(ev) {
      assert.equal(ev.type, 'focus');
      assert.equal(ev.target, instance.refs.wrapperEl);
      done();
    };

    let instance = ReactUtils.renderIntoDocument(
      <Select onFocus={onFocus}></Select>
    );

    // trigger 'focus' on wrapper <div> element
    ReactUtils.Simulate.focus(instance.refs.wrapperEl);
  });


  it('handles keydown on inner <select> properly', function(done) {
    let onKeyDown = function(ev) {
      assert.equal(ev.type, 'keydown');
      assert.equal(ev.target, instance.refs.selectEl);
      done();
    };

    let instance = ReactUtils.renderIntoDocument(
      <Select onKeyDown={onKeyDown}></Select>
    );

    // trigger 'keydown' on inner <select> element
    ReactUtils.Simulate.keyDown(instance.refs.selectEl);
  });


  it('handles keydown on wrapper <div> properly', function(done) {
    let onKeyDown = function(ev) {
      assert.equal(ev.type, 'keydown');
      assert.equal(ev.target, instance.refs.wrapperEl);
      done();
    };

    let instance = ReactUtils.renderIntoDocument(
      <Select onKeyDown={onKeyDown}></Select>
    );

    // trigger 'keydown' on wrapper <div> element
    ReactUtils.Simulate.keyDown(instance.refs.wrapperEl);
  });


  it('handles mousedown on inner <select> properly', function(done) {
    let onMouseDown = function(ev) {
      assert(ev.defaultPrevented, true);
      done();
    };

    let instance = ReactUtils.renderIntoDocument(
      <Select onMouseDown={onMouseDown}></Select>
    );

    // trigger 'mousedown' on inner <select> element
    ReactUtils.Simulate.mouseDown(instance.refs.selectEl, {button: 0});
  });


  it('shows custom menu on click', function() {
    let instance = ReactUtils.renderIntoDocument(elem);
    let wrapperEl = instance.refs.wrapperEl;
    let selectEl = instance.refs.selectEl;

    // check before and after click
    let numBefore = wrapperEl.children.length;
    ReactUtils.Simulate.click(selectEl, {button: 0});
    assert.equal(wrapperEl.children.length, numBefore + 1);
  });


  it("doesn't show custom menu when useDefault is true", function() {
    let instance = ReactUtils.renderIntoDocument(
      <Select useDefault={true}></Select>
    );

    let wrapperEl = instance.refs.wrapperEl;

    // check before and after 'click' on inner <select> element
    let numBefore = wrapperEl.children.length;
    ReactUtils.Simulate.click(instance.refs.selectEl, {button: 0});
    assert.equal(wrapperEl.children.length, numBefore);
  });


  it('renders menu items with additional classNames', function() {
    let instance = ReactUtils.renderIntoDocument(
      <Select>
        <Option />
        <Option className="my-custom-class" />
      </Select>
    );

    let selectEl = instance.refs.selectEl;

    // check option element custom class
    let optionEl = selectEl.children[1];
    assert.equal(optionEl.className, 'my-custom-class');

    // open menu
    ReactUtils.Simulate.click(selectEl, {button: 0});

    // check menu item custom class
    let findComponentFn = ReactUtils.findRenderedDOMComponentWithClass;
    let menuEl = findComponentFn(instance, 'mui-select__menu');
    let itemEl = menuEl.children[1];
    assert.equal(itemEl.className, 'my-custom-class');
  });
});
