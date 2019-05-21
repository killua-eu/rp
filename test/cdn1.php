<?php

echo '<!DOCTYPE html>
<html>
<head>';

echo '
    <script type="text/javascript" src="https://japex.vaizard.xyz/glued/public/js/babel.js"></script>
    
    <script src="https://unpkg.com/react@15/dist/react.min.js"></script>
    <script src="https://unpkg.com/react-dom@15/dist/react-dom.min.js"></script>
    <script src="https://unpkg.com/react-jsonschema-form@latest/dist/react-jsonschema-form.js"></script>
';

echo '
</head>
<body>

<h1>build script react test</h1>

<div id="main"></div>

';

echo '
  <script src="MyBundle.js"></script>
';


echo '
<script type="text/babel">
const Form = JSONSchemaForm.default;
const uiSchema = {};

const schema = {
  "title": "Test form",
  "type": "object",
  "properties": {
    "firstName": {
      "type": "string",
      "title": "First name"
    },
    "lastName": {
      "type": "string",
      "title": "Last name"
    }
  }
};

const formData = {
  "firstName": "Chuck",
  "lastName": "Norris"
};

function onSubmit(formData) { };

function onChange(formData) { };

ReactDOM.render((<Form onChange={onChange} onSubmit={onSubmit} uiSchema={uiSchema} schema={schema} formData={formData}></Form>),
    document.getElementById("main"));

</script>
';

echo '
</body>
</html>';

?>