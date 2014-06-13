
Welcome to the wild wonderful world of CiviCRM Multi-Form.

This extension was inspired by the Event component and its single Event Registration form.
Wouldn't it be nice to allow the user to create multiple forms for a single entity?

This extension creates a new civicrm entity called Multiform.
The idea is to create a container entity to associate with in the UF\_join table.
Having an additional Form entity, enables the association of multiple profile-containers with other entities, e.g. Events. 

The entity itself will hold the properties necessary to create a "Form", e.g. the title, non-profile data, etc.
