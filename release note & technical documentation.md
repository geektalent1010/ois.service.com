# Release Notes for Version 1.0.0

**Released on:** July 1, 2024

## Summary
This release includes several bug fixes, new features for user registration, and enhancements for admin management.

## New Features
- Implemented PowerBi integration for data analysis.

## Improvements
- Updates the OIS checklist on the website.
- Enhanced navigation with a new home page button.
- Improved scrolling functionality for admin creation pop-ups.

## Bug Fixes
- Fixed the issue where the padlock icon was non-functional.
- Resolved scrolling issues in the admin creation pop-up menus.

## Known Issues

---

# Technical Documentation

## Overview
The system is designed to streamline user registration and admin management for enhanced user experience.

## Installation and Setup

1. **Download the installation package from [link].**
2. **Run the installer and follow the on-screen instructions.**

## User Guide

### Creating a New Admin
To create a new admin, navigate to the Admin Management section and click 'Create New Admin'.

## API Documentation

### Create Admin Endpoint
- **Endpoint:** `/api/createAdmin`
- **Method:** `POST`
- **Parameters:**
  ```json
  {
    "name": "string",
    "email": "string"
  }
