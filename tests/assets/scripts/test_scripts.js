/**
 * test_scripts
 * 
 * tests all javascript in scripts.js.
 * 
 * @license		http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @author		Mike Funk
 * @link		http://mikefunk.com
 * @email		mike@mikefunk.com
 * 
 * @file		test_scripts.js
 * @version		1.2.0
 * @date		03/11/2012
 */

// --------------------------------------------------------------------------

/**
 * document ready
 */
$(function()
{

	// --------------------------------------------------------------------------
	
	/**
	 * test example
	 */
	module ('', {
		setup: function()
		{
			// setup
			var the_html = '';
			$('#qunit-fixture').html(the_html);
		},
		teardown: function()
		{
			$('#qunit-fixture').empty();
		}
	});
	
	test('function_name()', function()
	{
		expect(5);
		
		// test
	});


// 	// --------------------------------------------------------------------------
// 	
// 	/**
// 	 * examples
// 	 */
// 	test("a basic test example", function() 
// 	{
// 		ok( true, "this test is fine" );
// 		var value = "hello";
// 		equal( value, "hello", "We expect value to be hello" );
// 	});
// 	
// 	// --------------------------------------------------------------------------
// 	
// 	module("Module A");
// 	
// 	// --------------------------------------------------------------------------
// 	
// 	test("first test within module", function() 
// 	{
// 		ok( true, "all pass" );
// 	});
// 	
// 	// --------------------------------------------------------------------------
// 	
// 	test("second test within module", function() 
// 	{
// 		ok( true, "all pass" );
// 	});
// 	
// 	// --------------------------------------------------------------------------
// 	
// 	module("Module B");
// 	
// 	// --------------------------------------------------------------------------
// 	
// 	test("some other test", function() 
// 	{
// 		expect(2);
// 		equal( true, false, "failing test" );
// 		equal( true, true, "passing test" );
// 	});
// 	
// 	// --------------------------------------------------------------------------
	
});
/* End of file test_scripts.js */
/* Location: ./bookymark/tests/assets/scripts/test_scripts.js */