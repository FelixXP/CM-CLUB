var editor = $('#textEditor').wangEditor({
    'menuConfig': [
        ['viewSourceCode'],
        [ 'fontFamily', 'fontSize','justify'],
        ['bold', 'underline', 'italic', 'foreColor','strikethrough'],
        ['createLink', 'unLink','insertExpression'],
        ['insertImage','insertCode'],
        ['undo', 'redo', 'fullScreen']
    ]
});