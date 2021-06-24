/*
   Copyright © 2020 Sidemash Cloud Services

   Licensed under the Apache  License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless  required  by  applicable  law  or  agreed to in writing,
   software  distributed  under  the  License  is distributed on an
   "AS IS"  BASIS, WITHOUT  WARRANTIES  OR CONDITIONS OF  ANY KIND,
   either  express  or  implied.  See the License for the  specific
   language governing permissions and limitations under the License.
*/


<?php namespace Sidemash\Sdk;

use JsonSerializable;

class InstanceStatus implements JsonSerializable  {

    /** @var string */
    private $value ;

    /**
     * InstanceStatus constructor
     * @param string $value
     */
    private function __construct($value) {
        $this->value = $value;
    }

    /**
     * Getter of the field 'value'.
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

    public static function Initializing() {
        return new InstanceStatus("Initializing");
    }

    public static function Running() {
        return new InstanceStatus("Running");
    }

    public static function Restarting() {
        return new InstanceStatus("Restarting");
    }

    public static function Updating() {
        return new InstanceStatus("Updating");
    }

    public static function Maintaining() {
        return new InstanceStatus("Maintaining");
    }

    public static function PartiallyAvailable() {
        return new InstanceStatus("PartiallyAvailable");
    }

    public static function NotAvailable() {
        return new InstanceStatus("NotAvailable");
    }

    public static function Terminating() {
        return new InstanceStatus("Terminating");
    }

    public static function Terminated() {
        return new InstanceStatus("Terminated");
    }

    public static function allPossiblesValues() {
        return array("Initializing",
                     "Running",
                     "Restarting",
                     "Updating",
                     "Maintaining",
                     "PartiallyAvailable",
                     "NotAvailable",
                     "Terminating",
                     "Terminated");
    }

    public static function fromString($value) {
        switch ($value) {
            case "Initializing" : return self::Initializing(); break;
            case "Running" : return self::Running(); break;
            case "Restarting" : return self::Restarting(); break;
            case "Updating" : return self::Updating(); break;
            case "Maintaining" : return self::Maintaining(); break;
            case "PartiallyAvailable" : return self::PartiallyAvailable(); break;
            case "NotAvailable" : return self::NotAvailable(); break;
            case "Terminating" : return self::Terminating(); break;
            case "Terminated" : return self::Terminated(); break;
            default : return null;
        }
    }

    public static function isValid($value) {
        return in_array(self::allPossiblesValues(), $value);
    }

    public static function asOneOf($value, array $selection) {
        foreach($selection as $s) {
            if($s->value === $value) return $s;
        }
        return null;
    }

    public function isNotInitializing() {
        return $this->value !== "Initializing";
    }

    public function isNotRunning() {
        return $this->value !== "Running";
    }

    public function isNotRestarting() {
        return $this->value !== "Restarting";
    }

    public function isNotUpdating() {
        return $this->value !== "Updating";
    }

    public function isNotMaintaining() {
        return $this->value !== "Maintaining";
    }

    public function isNotPartiallyAvailable() {
        return $this->value !== "PartiallyAvailable";
    }

    public function isNotNotAvailable() {
        return $this->value !== "NotAvailable";
    }

    public function isNotTerminating() {
        return $this->value !== "Terminating";
    }

    public function isNotTerminated() {
        return $this->value !== "Terminated";
    }

    public function isInitializing() {
        return $this->value === "Initializing";
    }

    public function isRunning() {
        return $this->value === "Running";
    }

    public function isRestarting() {
        return $this->value === "Restarting";
    }

    public function isUpdating() {
        return $this->value === "Updating";
    }

    public function isMaintaining() {
        return $this->value === "Maintaining";
    }

    public function isPartiallyAvailable() {
        return $this->value === "PartiallyAvailable";
    }

    public function isNotAvailable() {
        return $this->value === "NotAvailable";
    }

    public function isTerminating() {
        return $this->value === "Terminating";
    }

    public function isTerminated() {
        return $this->value === "Terminated";
    }

    /**
     * Create InstanceStatus from JSON string
     *
     * @param string $json
     * @return InstanceStatus
     */
    public static function fromJson($json) {
        $value = json_decode($json, true);
        return InstanceStatus::fromString($value);
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function jsonSerialize() {
        return json_encode($this->value);
    }

    /**
     * JSON representing this object
     *
     * @return string
     */
    public function toJson() {
        return $this->jsonSerialize();
    }

    /**
     * Return associative array representing this object
     *
     * @return array
     */
    public function toArray() {
        return array_filter(get_object_vars($this), function ($v) { return $v !== null; });
    }

    public function __toString() {
        return $this->value;
    }
}