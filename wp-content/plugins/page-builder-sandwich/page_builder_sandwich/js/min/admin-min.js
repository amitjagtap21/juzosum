jQuery(document).ready(function($){"use strict";var originalContent="",hasAutosave=!1;"undefined"!=typeof pbsParams&&void 0!==pbsParams.is_editing&&("undefined"!=typeof wp&&void 0!==wp.autosave&&void 0!==wp.autosave.getCompareString&&(originalContent=wp.autosave.getCompareString(),hasAutosave=!0),function(){if(!hasAutosave)return!0;if(tinymce&&tinymce.activeEditor){if(tinymce.activeEditor.isDirty())return!0;if(originalContent!==wp.autosave.getCompareString())return!0;if(!tinymce.activeEditor.isHidden())return tinymce.activeEditor.isDirty()}return originalContent!==wp.autosave.getCompareString()},$("body").on("click","#pbs-admin-edit-with-pbs",function(ev){var title;return ev.preventDefault(),void 0!==(title=$("#title"))&&""===title.val()&&title.val("Post #"+pbsParams.post_id),localStorage&&localStorage.setItem("pbs-open-"+pbsParams.post_id,"1"),$(window).off("beforeunload"),$("form#post").append('<input type="hidden" name="pbs-save-redirect" value="'+pbsParams.meta_permalink+'" />'),$("form#post").submit(),!1}))}),jQuery(document).ready(function($){"use strict";"undefined"!=typeof pbsParams&&void 0!==pbsParams.nonce&&$("body").on("click",".pbs-rate-notice a.pbs-rate-hide",function(){$.post(pbsParams.ajax_url,{action:"pbs_hide_rating",nonce:pbsParams.nonce}),$(this).parents(".pbs-rate-notice").fadeOut()})});