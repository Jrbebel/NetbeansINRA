  1 ﻿/*
  2 Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
  3 For licensing, see LICENSE.html or http://ckeditor.com/license
  4 */
  5 
  6 /**
  7  * @fileOverview The "toolbar" plugin. Renders the default toolbar interface in
  8  * the editor.
  9  */
 10 
 11 (function()
 12 {
 13 	var toolbox = function()
 14 	{
 15 		this.toolbars = [];
 16 		this.focusCommandExecuted = false;
 17 	};
 18 
 19 	toolbox.prototype.focus = function()
 20 	{
 21 		for ( var t = 0, toolbar ; toolbar = this.toolbars[ t++ ] ; )
 22 		{
 23 			for ( var i = 0, item ; item = toolbar.items[ i++ ] ; )
 24 			{
 25 				if ( item.focus )
 26 				{
 27 					item.focus();
 28 					return;
 29 				}
 30 			}
 31 		}
 32 	};
 33 
 34 	var commands =
 35 	{
 36 		toolbarFocus :
 37 		{
 38 			modes : { wysiwyg : 1, source : 1 },
 39 			readOnly : 1,
 40 
 41 			exec : function( editor )
 42 			{
 43 				if ( editor.toolbox )
 44 				{
 45 					editor.toolbox.focusCommandExecuted = true;
 46 
 47 					// Make the first button focus accessible for IE. (#3417)
 48 					// Adobe AIR instead need while of delay.
 49 					if ( CKEDITOR.env.ie || CKEDITOR.env.air )
 50 						setTimeout( function(){ editor.toolbox.focus(); }, 100 );
 51 					else
 52 						editor.toolbox.focus();
 53 				}
 54 			}
 55 		}
 56 	};
 57 
 58 	CKEDITOR.plugins.add( 'toolbar',
 59 	{
 60 		requires : [ 'button' ],
 61 		init : function( editor )
 62 		{
 63 			var endFlag;
 64 
 65 			var itemKeystroke = function( item, keystroke )
 66 			{
 67 				var next, toolbar;
 68 				var rtl = editor.lang.dir == 'rtl',
 69 					toolbarGroupCycling = editor.config.toolbarGroupCycling;
 70 
 71 				toolbarGroupCycling = toolbarGroupCycling === undefined || toolbarGroupCycling;
 72 
 73 				switch ( keystroke )
 74 				{
 75 					case 9 :					// TAB
 76 					case CKEDITOR.SHIFT + 9 :	// SHIFT + TAB
 77 						// Cycle through the toolbars, starting from the one
 78 						// closest to the current item.
 79 						while ( !toolbar || !toolbar.items.length )
 80 						{
 81 							toolbar = keystroke == 9 ?
 82 								( ( toolbar ? toolbar.next : item.toolbar.next ) || editor.toolbox.toolbars[ 0 ] ) :
 83 								( ( toolbar ? toolbar.previous : item.toolbar.previous ) || editor.toolbox.toolbars[ editor.toolbox.toolbars.length - 1 ] );
 84 
 85 							// Look for the first item that accepts focus.
 86 							if ( toolbar.items.length )
 87 							{
 88 								item = toolbar.items[ endFlag ? ( toolbar.items.length - 1 ) : 0 ];
 89 								while ( item && !item.focus )
 90 								{
 91 									item = endFlag ? item.previous : item.next;
 92 
 93 									if ( !item )
 94 										toolbar = 0;
 95 								}
 96 							}
 97 						}
 98 
 99 						if ( item )
100 							item.focus();
101 
102 						return false;
103 
104 					case rtl ? 37 : 39 :		// RIGHT-ARROW
105 					case 40 :					// DOWN-ARROW
106 						next = item;
107 						do
108 						{
109 							// Look for the next item in the toolbar.
110 							next = next.next;
111 
112 							// If it's the last item, cycle to the first one.
113 							if ( !next && toolbarGroupCycling )
114 								next = item.toolbar.items[ 0 ];
115 						}
116 						while ( next && !next.focus )
117 
118 						// If available, just focus it, otherwise focus the
119 						// first one.
120 						if ( next )
121 							next.focus();
122 						else
123 							// Send a TAB.
124 							itemKeystroke( item, 9 );
125 
126 						return false;
127 
128 					case rtl ? 39 : 37 :		// LEFT-ARROW
129 					case 38 :					// UP-ARROW
130 						next = item;
131 						do
132 						{
133 							// Look for the previous item in the toolbar.
134 							next = next.previous;
135 
136 							// If it's the first item, cycle to the last one.
137 							if ( !next && toolbarGroupCycling )
138 								next = item.toolbar.items[ item.toolbar.items.length - 1 ];
139 						}
140 						while ( next && !next.focus )
141 
142 						// If available, just focus it, otherwise focus the
143 						// last one.
144 						if ( next )
145 							next.focus();
146 						else
147 						{
148 							endFlag = 1;
149 							// Send a SHIFT + TAB.
150 							itemKeystroke( item, CKEDITOR.SHIFT + 9 );
151 							endFlag = 0;
152 						}
153 
154 						return false;
155 
156 					case 27 :					// ESC
157 						editor.focus();
158 						return false;
159 
160 					case 13 :					// ENTER
161 					case 32 :					// SPACE
162 						item.execute();
163 						return false;
164 				}
165 				return true;
166 			};
167 
168 			editor.on( 'themeSpace', function( event )
169 				{
170 					if ( event.data.space == editor.config.toolbarLocation )
171 					{
172 						editor.toolbox = new toolbox();
173 
174 						var labelId = CKEDITOR.tools.getNextId();
175 
176 						var output = [ '<div class="cke_toolbox" role="group" aria-labelledby="', labelId, '" onmousedown="return false;"' ],
177 							expanded =  editor.config.toolbarStartupExpanded !== false,
178 							groupStarted;
179 
180 						output.push( expanded ? '>' : ' style="display:none">' );
181 
182 						// Sends the ARIA label.
183 						output.push( '<span id="', labelId, '" class="cke_voice_label">', editor.lang.toolbars, '</span>' );
184 
185 						var toolbars = editor.toolbox.toolbars,
186 							toolbar =
187 									( editor.config.toolbar instanceof Array ) ?
188 										editor.config.toolbar
189 									:
190 										editor.config[ 'toolbar_' + editor.config.toolbar ];
191 
192 						for ( var r = 0 ; r < toolbar.length ; r++ )
193 						{
194 							var toolbarId,
195 								toolbarObj = 0,
196 								toolbarName,
197 								row = toolbar[ r ],
198 								items;
199 
200 							// It's better to check if the row object is really
201 							// available because it's a common mistake to leave
202 							// an extra comma in the toolbar definition
203 							// settings, which leads on the editor not loading
204 							// at all in IE. (#3983)
205 							if ( !row )
206 								continue;
207 
208 							if ( groupStarted )
209 							{
210 								output.push( '</div>' );
211 								groupStarted = 0;
212 							}
213 
214 							if ( row === '/' )
215 							{
216 								output.push( '<div class="cke_break"></div>' );
217 								continue;
218 							}
219 
220 							items = row.items || row;
221 
222 							// Create all items defined for this toolbar.
223 							for ( var i = 0 ; i < items.length ; i++ )
224 							{
225 								var item,
226 									itemName = items[ i ],
227 									canGroup;
228 
229 								item = editor.ui.create( itemName );
230 
231 								if ( item )
232 								{
233 									canGroup = item.canGroup !== false;
234 
235 									// Initialize the toolbar first, if needed.
236 									if ( !toolbarObj )
237 									{
238 										// Create the basic toolbar object.
239 										toolbarId = CKEDITOR.tools.getNextId();
240 										toolbarObj = { id : toolbarId, items : [] };
241 										toolbarName = row.name && ( editor.lang.toolbarGroups[ row.name ] || row.name );
242 
243 										// Output the toolbar opener.
244 										output.push( '<span id="', toolbarId, '" class="cke_toolbar"',
245 											( toolbarName ? ' aria-labelledby="'+ toolbarId +  '_label"' : '' ),
246 											' role="toolbar">' );
247 
248 										// If a toolbar name is available, send the voice label.
249 										toolbarName && output.push( '<span id="', toolbarId, '_label" class="cke_voice_label">', toolbarName, '</span>' );
250 
251 										output.push( '<span class="cke_toolbar_start"></span>' );
252 
253 										// Add the toolbar to the "editor.toolbox.toolbars"
254 										// array.
255 										var index = toolbars.push( toolbarObj ) - 1;
256 
257 										// Create the next/previous reference.
258 										if ( index > 0 )
259 										{
260 											toolbarObj.previous = toolbars[ index - 1 ];
261 											toolbarObj.previous.next = toolbarObj;
262 										}
263 									}
264 
265 									if ( canGroup )
266 									{
267 										if ( !groupStarted )
268 										{
269 											output.push( '<span class="cke_toolgroup" role="presentation">' );
270 											groupStarted = 1;
271 										}
272 									}
273 									else if ( groupStarted )
274 									{
275 										output.push( '</span>' );
276 										groupStarted = 0;
277 									}
278 
279 									var itemObj = item.render( editor, output );
280 									index = toolbarObj.items.push( itemObj ) - 1;
281 
282 									if ( index > 0 )
283 									{
284 										itemObj.previous = toolbarObj.items[ index - 1 ];
285 										itemObj.previous.next = itemObj;
286 									}
287 
288 									itemObj.toolbar = toolbarObj;
289 									itemObj.onkey = itemKeystroke;
290 
291 									/*
292 									 * Fix for #3052:
293 									 * Prevent JAWS from focusing the toolbar after document load.
294 									 */
295 									itemObj.onfocus = function()
296 									{
297 										if ( !editor.toolbox.focusCommandExecuted )
298 											editor.focus();
299 									};
300 								}
301 							}
302 
303 							if ( groupStarted )
304 							{
305 								output.push( '</span>' );
306 								groupStarted = 0;
307 							}
308 
309 							if ( toolbarObj )
310 								output.push( '<span class="cke_toolbar_end"></span></span>' );
311 						}
312 
313 						output.push( '</div>' );
314 
315 						if ( editor.config.toolbarCanCollapse )
316 						{
317 							var collapserFn = CKEDITOR.tools.addFunction(
318 								function()
319 								{
320 									editor.execCommand( 'toolbarCollapse' );
321 								});
322 
323 							editor.on( 'destroy', function () {
324 									CKEDITOR.tools.removeFunction( collapserFn );
325 								});
326 
327 							var collapserId = CKEDITOR.tools.getNextId();
328 
329 							editor.addCommand( 'toolbarCollapse',
330 								{
331 									readOnly : 1,
332 									exec : function( editor )
333 									{
334 										var collapser = CKEDITOR.document.getById( collapserId ),
335 											toolbox = collapser.getPrevious(),
336 											contents = editor.getThemeSpace( 'contents' ),
337 											toolboxContainer = toolbox.getParent(),
338 											contentHeight = parseInt( contents.$.style.height, 10 ),
339 											previousHeight = toolboxContainer.$.offsetHeight,
340 											collapsed = !toolbox.isVisible();
341 
342 										if ( !collapsed )
343 										{
344 											toolbox.hide();
345 											collapser.addClass( 'cke_toolbox_collapser_min' );
346 											collapser.setAttribute( 'title', editor.lang.toolbarExpand );
347 										}
348 										else
349 										{
350 											toolbox.show();
351 											collapser.removeClass( 'cke_toolbox_collapser_min' );
352 											collapser.setAttribute( 'title', editor.lang.toolbarCollapse );
353 										}
354 
355 										// Update collapser symbol.
356 										collapser.getFirst().setText( collapsed ?
357 											'\u25B2' :		// BLACK UP-POINTING TRIANGLE
358 											'\u25C0' );		// BLACK LEFT-POINTING TRIANGLE
359 
360 										var dy = toolboxContainer.$.offsetHeight - previousHeight;
361 										contents.setStyle( 'height', ( contentHeight - dy ) + 'px' );
362 
363 										editor.fire( 'resize' );
364 									},
365 
366 									modes : { wysiwyg : 1, source : 1 }
367 								} );
368 
369 							output.push( '<a title="' + ( expanded ? editor.lang.toolbarCollapse : editor.lang.toolbarExpand )
370 													  + '" id="' + collapserId + '" tabIndex="-1" class="cke_toolbox_collapser' );
371 
372 							if ( !expanded )
373 								output.push( ' cke_toolbox_collapser_min' );
374 
375 							output.push( '" onclick="CKEDITOR.tools.callFunction(' + collapserFn + ')">',
376 										'<span>▲</span>',		// BLACK UP-POINTING TRIANGLE
377 										'</a>' );
378 						}
379 
380 						event.data.html += output.join( '' );
381 					}
382 				});
383 
384 			editor.on( 'destroy', function()
385 			{
386 				var toolbars, index = 0, i,
387 						items, instance;
388 				toolbars = this.toolbox.toolbars;
389 				for ( ; index < toolbars.length; index++ )
390 				{
391 					items = toolbars[ index ].items;
392 					for ( i = 0; i < items.length; i++ )
393 					{
394 						instance = items[ i ];
395 						if ( instance.clickFn ) CKEDITOR.tools.removeFunction( instance.clickFn );
396 						if ( instance.keyDownFn ) CKEDITOR.tools.removeFunction( instance.keyDownFn );
397 					}
398 				}
399 			});
400 
401 			editor.addCommand( 'toolbarFocus', commands.toolbarFocus );
402 
403 			editor.ui.add( '-', CKEDITOR.UI_SEPARATOR, {} );
404 			editor.ui.addHandler( CKEDITOR.UI_SEPARATOR,
405 			{
406 				create: function()
407 				{
408 					return {
409 						render : function( editor, output )
410 						{
411 							output.push( '<span class="cke_separator" role="separator"></span>' );
412 							return {};
413 						}
414 					};
415 				}
416 			});
417 		}
418 	});
419 })();
420 
421 CKEDITOR.UI_SEPARATOR = 'separator';
422 
423 /**
424  * The "theme space" to which rendering the toolbar. For the default theme,
425  * the recommended options are "top" and "bottom".
426  * @type String
427  * @default 'top'
428  * @see CKEDITOR.config.theme
429  * @example
430  * config.toolbarLocation = 'bottom';
431  */
432 CKEDITOR.config.toolbarLocation = 'top';
433 
434 /**
435  * The toolbar definition. It is an array of toolbars (strips),
436  * each one being also an array, containing a list of UI items.
437  * Note that this setting is composed by "toolbar_" added by the toolbar name,
438  * which in this case is called "Basic". This second part of the setting name
439  * can be anything. You must use this name in the
440  * {@link CKEDITOR.config.toolbar} setting, so you instruct the editor which
441  * toolbar_(name) setting to you.
442  * @type Array
443  * @example
444  * // Defines a toolbar with only one strip containing the "Source" button, a
445  * // separator and the "Bold" and "Italic" buttons.
446  * <b>config.toolbar_Basic =
447  * [
448  *     [ 'Source', '-', 'Bold', 'Italic' ]
449  * ]</b>;
450  * config.toolbar = 'Basic';
451  */
452 CKEDITOR.config.toolbar_Basic =
453 [
454 	['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','About']
455 ];
456 
457 /**
458  * This is the default toolbar definition used by the editor. It contains all
459  * editor features.
460  * @type Array
461  * @default (see example)
462  * @example
463  * // This is actually the default value.
464  * config.toolbar_Full =
465  * [
466  *     { name: 'document',    items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
467  *     { name: 'clipboard',   items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
468  *     { name: 'editing',     items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
469  *     { name: 'forms',       items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
470  *     '/',
471  *     { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
472  *     { name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
473  *     { name: 'links',       items : [ 'Link','Unlink','Anchor' ] },
474  *     { name: 'insert',      items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak' ] },
475  *     '/',
476  *     { name: 'styles',      items : [ 'Styles','Format','Font','FontSize' ] },
477  *     { name: 'colors',      items : [ 'TextColor','BGColor' ] },
478  *     { name: 'tools',       items : [ 'Maximize', 'ShowBlocks','-','About' ] }
479  * ];
480  */
481 CKEDITOR.config.toolbar_Full =
482 [
483 	{ name: 'document',		items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
484 	{ name: 'clipboard',	items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
485 	{ name: 'editing',		items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
486 	{ name: 'forms',		items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
487 	'/',
488 	{ name: 'basicstyles',	items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
489 	{ name: 'paragraph',	items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
490 	{ name: 'links',		items : [ 'Link','Unlink','Anchor' ] },
491 	{ name: 'insert',		items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
492 	'/',
493 	{ name: 'styles',		items : [ 'Styles','Format','Font','FontSize' ] },
494 	{ name: 'colors',		items : [ 'TextColor','BGColor' ] },
495 	{ name: 'tools',		items : [ 'Maximize', 'ShowBlocks','-','About' ] }
496 ];
497 
498 /**
499  * The toolbox (alias toolbar) definition. It is a toolbar name or an array of
500  * toolbars (strips), each one being also an array, containing a list of UI items.
501  * @type Array|String
502  * @default 'Full'
503  * @example
504  * // Defines a toolbar with only one strip containing the "Source" button, a
505  * // separator and the "Bold" and "Italic" buttons.
506  * config.toolbar =
507  * [
508  *     [ 'Source', '-', 'Bold', 'Italic' ]
509  * ];
510  * @example
511  * // Load toolbar_Name where Name = Basic.
512  * config.toolbar = 'Basic';
513  */
514 CKEDITOR.config.toolbar = 'Full';
515 
516 /**
517  * Whether the toolbar can be collapsed by the user. If disabled, the collapser
518  * button will not be displayed.
519  * @type Boolean
520  * @default true
521  * @example
522  * config.toolbarCanCollapse = false;
523  */
524 CKEDITOR.config.toolbarCanCollapse = true;
525 
526 /**
527  * Whether the toolbar must start expanded when the editor is loaded.
528  * @name CKEDITOR.config.toolbarStartupExpanded
529  * @type Boolean
530  * @default true
531  * @example
532  * config.toolbarStartupExpanded = false;
533  */
534 
535 /**
536  * When enabled, makes the arrow keys navigation cycle within the current
537  * toolbar group. Otherwise the arrows will move trought all items available in
538  * the toolbar. The TAB key will still be used to quickly jump among the
539  * toolbar groups.
540  * @name CKEDITOR.config.toolbarGroupCycling
541  * @since 3.6
542  * @type Boolean
543  * @default true
544  * @example
545  * config.toolbarGroupCycling = false;
546  */
547 
