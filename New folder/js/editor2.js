$(document).ready(function() {
    // create Editor from textarea HTML element with default set of tools
    $("#editor").kendoEditor({ resizable: {
        content: true,
        toolbar: true
    }});
});
                