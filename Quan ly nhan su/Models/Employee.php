<?php
class Employee {
    private string $firstName;
    private string $lastName;
    private string $birthDate;
    private string $address;
    private string $jobTitle;

    public function __construct($firstName, $lastName, $birthDate, $address, $jobTitle)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate= $birthDate;
        $this->address = $address;
        $this->jobTitle = $jobTitle;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     */
    public function setBirthDate(string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }

    /**
     * @param string $jobTitle
     */
    public function setJobTitle(string $jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }


    }