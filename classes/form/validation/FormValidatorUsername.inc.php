<?php

/**
 * @file classes/form/validation/FormValidatorUsername.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2000-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class FormValidatorUsername
 * @ingroup form_validation
 *
 * @see FormValidator
 *
 * @brief Form validation check for usernames (lowercase alphanumeric with interior dash/underscore
 */

namespace PKP\form\validation;

;
use PKP\validation\ValidatorRegExp;

class FormValidatorUsername extends FormValidator
{
    /**
     * Constructor.
     *
     * @param $form Form the associated form
     * @param $field string the name of the associated field
     * @param $type string the type of check, either "required" or "optional"
     * @param $message string the error message for validation failures (i18n key)
     */
    public function __construct(&$form, $field, $type, $message)
    {
        parent::__construct(
            $form,
            $field,
            $type,
            $message,
            new ValidatorRegExp('/^[a-z0-9]+([\-_][a-z0-9]+)*$/')
        );
    }
}

if (!PKP_STRICT_MODE) {
    class_alias('\PKP\form\validation\FormValidatorUsername', '\FormValidatorUsername');
}
