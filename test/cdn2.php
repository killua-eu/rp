<?php

echo '<!DOCTYPE html>
<html>
<head>';

echo '
    <script src="https://unpkg.com/react-jsonschema-form-extras@0.9.40/dist/form-with-extras.js"></script>
';

// <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
//     <script src="https://unpkg.com/react-jsonschema-form@latest/dist/react-jsonschema-form.js"></script>
//    <script src="https://unpkg.com/react@15/dist/react.min.js"></script>
//    <script src="https://unpkg.com/react-dom@15/dist/react-dom.min.js"></script>


echo '
</head>
<body>

<h1>build script react test</h1>

<div id="main"></div>

';

echo '
  
';


echo '
<script type="text/babel"
                const fields = JSONSchemaFormExtra.default;
                const uiSchema =
                "TextBox": {
                "ui:field": "rte",
                "rte": {
                "format": "html"
                }
                }
        return(
           <Form 
                  schema={schema}
                  uiSchema={uiSchema}   
                   field={fields}  
                  onSubmit={onSubmit}    
            </Form>)   
    </script>
';

echo '
</body>
</html>';

?>