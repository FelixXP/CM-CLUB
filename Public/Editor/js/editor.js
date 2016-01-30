var editor = $('#textEditor').wangEditor({
    'menuConfig': [
        ['viewSourceCode'],
        [ 'fontFamily', 'justify'],
        ['bold', 'underline', 'italic', 'foreColor','strikethrough'],
        ['createLink', 'unLink','insertExpression'],
        ['insertImage','insertCode'],
        ['undo', 'redo', 'fullScreen']
    ]
});