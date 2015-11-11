<?php
/**
 * Generated by build/gen_test
 */
use LightnCandy\LightnCandy;
use LightnCandy\Runtime;

class LightnCandyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers LightnCandy\LightnCandy::stripExtendedComments
     */
    public function testOn_stripExtendedComments() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'stripExtendedComments');
        $method->setAccessible(true);
        $this->assertEquals('abc', $method->invokeArgs(null,array(
            'abc'
)        ));
        $this->assertEquals('abc{{!}}cde', $method->invokeArgs(null,array(
            'abc{{!}}cde'
)        ));
        $this->assertEquals('abc{{! }}cde', $method->invokeArgs(null,array(
            'abc{{!----}}cde'
)        ));
    }
    /**
     * @covers LightnCandy\LightnCandy::escapeTemplate
     */
    public function testOn_escapeTemplate() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'escapeTemplate');
        $method->setAccessible(true);
        $this->assertEquals('abc', $method->invokeArgs(null,array(
            'abc'
)        ));
        $this->assertEquals('a\\\\bc', $method->invokeArgs(null,array(
            'a\bc'
)        ));
        $this->assertEquals('a\\\'bc', $method->invokeArgs(null,array(
            'a\'bc'
)        ));
    }
    /**
     * @covers LightnCandy\LightnCandy::getPHPCode
     */
    public function testOn_getPHPCode() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'getPHPCode');
        $method->setAccessible(true);
        $this->assertEquals('function($a) {return;}', $method->invokeArgs(null,array(
            function ($a) {return;}
)        ));
        $this->assertEquals('function($a) {return;}', $method->invokeArgs(null,array(
               function ($a) {return;}
)        ));
    }
    /**
     * @covers LightnCandy\LightnCandy::handleError
     */
    public function testOn_handleError() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'handleError');
        $method->setAccessible(true);
        $this->assertEquals(true, $method->invokeArgs(null,array(
            array('level' => 1, 'stack' => array('X'), 'flags' => array('errorlog' => 0, 'exception' => 0), 'error' => array(), 'rawblock' => 0)
)        ));
        $this->assertEquals(false, $method->invokeArgs(null,array(
            array('level' => 0, 'error' => array())
)        ));
        $this->assertEquals(true, $method->invokeArgs(null,array(
            array('level' => 0, 'error' => array('some error'), 'flags' => array('errorlog' => 0, 'exception' => 0))
)        ));
    }
    /**
     * @covers LightnCandy\LightnCandy::getBoolStr
     */
    public function testOn_getBoolStr() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'getBoolStr');
        $method->setAccessible(true);
        $this->assertEquals('true', $method->invokeArgs(null,array(
            1
)        ));
        $this->assertEquals('true', $method->invokeArgs(null,array(
            999
)        ));
        $this->assertEquals('false', $method->invokeArgs(null,array(
            0
)        ));
        $this->assertEquals('false', $method->invokeArgs(null,array(
            -1
)        ));
    }
    /**
     * @covers LightnCandy\LightnCandy::getFuncName
     */
    public function testOn_getFuncName() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'getFuncName');
        $method->setAccessible(true);
        $this->assertEquals('LR::test(', $method->invokeArgs(null,array(
            array('flags' => array('standalone' => 0, 'debug' => 0), 'runtime' => 'Runtime'), 'test', ''
)        ));
        $this->assertEquals('LR::test2(', $method->invokeArgs(null,array(
            array('flags' => array('standalone' => 0, 'debug' => 0), 'runtime' => 'Runtime'), 'test2', ''
)        ));
        $this->assertEquals("\$cx['funcs']['test3'](", $method->invokeArgs(null,array(
            array('flags' => array('standalone' => 1, 'debug' => 0), 'runtime' => 'Runtime'), 'test3', ''
)        ));
        $this->assertEquals('LR::debug(\'abc\', \'test\', ', $method->invokeArgs(null,array(
            array('flags' => array('standalone' => 0, 'debug' => 1), 'runtime' => 'Runtime'), 'test', 'abc'
)        ));
    }
    /**
     * @covers LightnCandy\LightnCandy::getArrayStr
     */
    public function testOn_getArrayStr() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'getArrayStr');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invokeArgs(null,array(
            array()
)        ));
        $this->assertEquals('[a]', $method->invokeArgs(null,array(
            array('a')
)        ));
        $this->assertEquals('[a][b][c]', $method->invokeArgs(null,array(
            array('a', 'b', 'c')
)        ));
    }
    /**
     * @covers LightnCandy\LightnCandy::getArrayCode
     */
    public function testOn_getArrayCode() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'getArrayCode');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invokeArgs(null,array(
            array()
)        ));
        $this->assertEquals("['a']", $method->invokeArgs(null,array(
            array('a')
)        ));
        $this->assertEquals("['a']['b']['c']", $method->invokeArgs(null,array(
            array('a', 'b', 'c')
)        ));
    }
    /**
     * @covers LightnCandy\LightnCandy::getVariableNames
     */
    public function testOn_getVariableNames() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'getVariableNames');
        $method->setAccessible(true);
        $this->assertEquals(array('array(array($in),array())', array('this')), $method->invokeArgs(null,array(
            array(null), array('flags'=>array('spvar'=>true))
)        ));
        $this->assertEquals(array('array(array($in,$in),array())', array('this', 'this')), $method->invokeArgs(null,array(
            array(null, null), array('flags'=>array('spvar'=>true))
)        ));
        $this->assertEquals(array('array(array(),array(\'a\'=>$in))', array('this')), $method->invokeArgs(null,array(
            array('a' => null), array('flags'=>array('spvar'=>true))
)        ));
    }
    /**
     * @covers LightnCandy\LightnCandy::getVariableName
     */
    public function testOn_getVariableName() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'getVariableName');
        $method->setAccessible(true);
        $this->assertEquals(array('$in', 'this'), $method->invokeArgs(null,array(
            array(null), array('flags'=>array('spvar'=>true,'debug'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'true\']) && is_array($in)) ? $in[\'true\'] : null)', '[true]'), $method->invokeArgs(null,array(
            array('true'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'false\']) && is_array($in)) ? $in[\'false\'] : null)', '[false]'), $method->invokeArgs(null,array(
            array('false'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array('true', 'true'), $method->invokeArgs(null,array(
            array(0, 'true'), array('flags'=>array('spvar'=>true,'debug'=>0))
)        ));
        $this->assertEquals(array('false', 'false'), $method->invokeArgs(null,array(
            array(0, 'false'), array('flags'=>array('spvar'=>true,'debug'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'2\']) && is_array($in)) ? $in[\'2\'] : null)', '[2]'), $method->invokeArgs(null,array(
            array('2'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array('2', '2'), $method->invokeArgs(null,array(
            array(0, '2'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'@index\']) && is_array($in)) ? $in[\'@index\'] : null)', '[@index]'), $method->invokeArgs(null,array(
            array('@index'), array('flags'=>array('spvar'=>false,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array("((isset(\$cx['sp_vars']['index']) && is_array(\$cx['sp_vars'])) ? \$cx['sp_vars']['index'] : null)", '@[index]'), $method->invokeArgs(null,array(
            array('@index'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array("((isset(\$cx['sp_vars']['key']) && is_array(\$cx['sp_vars'])) ? \$cx['sp_vars']['key'] : null)", '@[key]'), $method->invokeArgs(null,array(
            array('@key'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array("((isset(\$cx['sp_vars']['first']) && is_array(\$cx['sp_vars'])) ? \$cx['sp_vars']['first'] : null)", '@[first]'), $method->invokeArgs(null,array(
            array('@first'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array("((isset(\$cx['sp_vars']['last']) && is_array(\$cx['sp_vars'])) ? \$cx['sp_vars']['last'] : null)", '@[last]'), $method->invokeArgs(null,array(
            array('@last'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'"a"\']) && is_array($in)) ? $in[\'"a"\'] : null)', '["a"]'), $method->invokeArgs(null,array(
            array('"a"'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array('"a"', '"a"'), $method->invokeArgs(null,array(
            array(0, '"a"'), array('flags'=>array('spvar'=>true,'debug'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'a\']) && is_array($in)) ? $in[\'a\'] : null)', '[a]'), $method->invokeArgs(null,array(
            array('a'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array('((isset($cx[\'scopes\'][count($cx[\'scopes\'])-1][\'a\']) && is_array($cx[\'scopes\'][count($cx[\'scopes\'])-1])) ? $cx[\'scopes\'][count($cx[\'scopes\'])-1][\'a\'] : null)', '../[a]'), $method->invokeArgs(null,array(
            array(1,'a'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array('((isset($cx[\'scopes\'][count($cx[\'scopes\'])-3][\'a\']) && is_array($cx[\'scopes\'][count($cx[\'scopes\'])-3])) ? $cx[\'scopes\'][count($cx[\'scopes\'])-3][\'a\'] : null)', '../../../[a]'), $method->invokeArgs(null,array(
            array(3,'a'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array('((isset($in[\'id\']) && is_array($in)) ? $in[\'id\'] : null)', 'this.[id]'), $method->invokeArgs(null,array(
            array(null, 'id'), array('flags'=>array('spvar'=>true,'debug'=>0,'prop'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0))
)        ));
        $this->assertEquals(array('LR::v($cx, $in, array(\'id\'))', 'this.[id]'), $method->invokeArgs(null,array(
            array(null, 'id'), array('flags'=>array('prop'=>true,'spvar'=>true,'debug'=>0,'method'=>0,'mustlok'=>0,'mustlam'=>0, 'lambda'=>0,'standalone'=>0), 'runtime' => 'Runtime')
)        ));
    }
    /**
     * @covers LightnCandy\LightnCandy::getExpression
     */
    public function testOn_getExpression() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'getExpression');
        $method->setAccessible(true);
        $this->assertEquals('[a].[b]', $method->invokeArgs(null,array(
            0, false, array('a', 'b')
)        ));
        $this->assertEquals('@[root]', $method->invokeArgs(null,array(
            0, true, array('root')
)        ));
        $this->assertEquals('this', $method->invokeArgs(null,array(
            0, false, null
)        ));
        $this->assertEquals('this.[id]', $method->invokeArgs(null,array(
            0, false, array(null, 'id')
)        ));
        $this->assertEquals('@[root].[a].[b]', $method->invokeArgs(null,array(
            0, true, array('root', 'a', 'b')
)        ));
        $this->assertEquals('../../[a].[b]', $method->invokeArgs(null,array(
            2, false, array('a', 'b')
)        ));
        $this->assertEquals('../[a\'b]', $method->invokeArgs(null,array(
            1, false, array('a\'b')
)        ));
    }
    /**
     * @covers LightnCandy\LightnCandy::addUsageCount
     */
    public function testOn_addUsageCount() {
        $method = new \ReflectionMethod('LightnCandy\LightnCandy', 'addUsageCount');
        $method->setAccessible(true);
        $this->assertEquals(1, $method->invokeArgs(null,array(
            array('usedCount' => array('test' => array())), 'test', 'testname'
)        ));
        $this->assertEquals(3, $method->invokeArgs(null,array(
            array('usedCount' => array('test' => array('testname' => 2))), 'test', 'testname'
)        ));
        $this->assertEquals(5, $method->invokeArgs(null,array(
            array('usedCount' => array('test' => array('testname' => 2))), 'test', 'testname', 3
)        ));
    }
}
?>