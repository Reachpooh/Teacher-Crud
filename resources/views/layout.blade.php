<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Management</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4F46E5;
            --primary-hover: #4338ca;
            --bg: #F3F4F6;
            --card-bg: #FFFFFF;
            --text: #1F2937;
            --text-light: #6B7280;
            --border: #E5E7EB;
            --danger: #EF4444;
            --success: #10B981;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            margin: 0;
            padding: 0;
            line-height: 1.5;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .header h1 {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--text);
            margin: 0;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            text-decoration: none;
            transition: background-color 0.2s, border-color 0.2s, color 0.2s;
            border: 1px solid transparent; /* Base border for consistency */
            cursor: pointer;
            font-size: 0.875rem;
            font-family: inherit; /* Inherit font family */
            line-height: 1.25rem;
        }

        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
        }

        .btn-danger {
            background-color: var(--danger);
            border-color: var(--danger);
            color: white;
        }

        .btn-secondary {
            background-color: white;
            border-color: var(--border);
            color: var(--text);
        }

        /* ... */

        .actions form {
            margin: 0;
        }

        .card {
            background-color: var(--card-bg);
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            overflow: hidden;
            padding: 2rem;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 1000px; /* Fixed width for consistency as requested in image, or 100% */
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th {
            background-color: #F9FAFB;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            color: var(--text-light);
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            border-bottom: 1px solid var(--border);
        }

        td {
            padding: 1rem 1.5rem;
            border-bottom: 1px solid var(--border);
            color: var(--text);
        }

        tr:hover {
            background-color: #F9FAFB;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--text);
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        input[type="tel"] {
            width: 100%;
            padding: 0.625rem;
            border: 1px solid var(--border);
            border-radius: 0.375rem;
            font-size: 0.875rem;
            color: var(--text);
            transition: border-color 0.2s, box-shadow 0.2s;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .actions {
            display: flex;
            gap: 0.5rem;
        }

        .alert {
            padding: 1rem;
            border-radius: 0.375rem;
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
        }

        .alert-success {
            background-color: #D1FAE5;
            color: #065F46;
        }

        .empty-state {
            text-align: center;
            padding: 3rem;
            color: var(--text-light);
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>
