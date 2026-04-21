<!DOCTYPE html>
<html>

<head>
    <title>Lab 3 - ATM Machine Simulation</title>
</head>
<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    * {
        margin: 0;
        padding: 0;
        font-family: Verdana;
        outline: none;
        border: none;
        text-decoration: none;
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-behavior: smooth;
        scroll-padding-top: 110px;
    }

    section {
        padding: 0px 200px;
    }

    body {
        background: #dbeafe;
        color: #1e2f5a;
    }

    header {
        width: 100%;
        padding: 25px 200px;
        background: rgba(255, 255, 255, 0.6);
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    header h1 {
        font-size: 26px;
        color: #3f5fa9;
    }


    .navbar a {
        font-size: 18px;
        color: #3f5fa9;
        margin-left: 25px;
        border-bottom: 2px solid transparent;
        padding-bottom: 5px;
    }

    .navbar a.active,
    .navbar a:hover {
        color: #1e2f5a;
        border-bottom: 2px solid #93c5fd;
    }


    .container form {
        margin: 45px auto;
        width: 340px;
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        gap: 5px;
    }

    label {
        font-size: 16px;
        color: #3f5fa9;
    }

    input[type="text"],
    input[type="number"],
    select {
        padding: 10px;
        border: 1px solid #c7d2fe;
        border-radius: 8px;
        background: #f8fbff;
    }

    input[type="submit"] {
        margin-top: 10px;
        padding: 10px;
        background: #3f5fa9;
        color: white;
        border-radius: 8px;
    }

    .result {
        margin: 20px auto;
        width: 340px;
        background: #ffffff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        text-align: left;
    }

    .result h2 {
        font-size: 16px;
        margin-bottom: 8px;
        color: #1e2f5a;
    }

    .result h2:first-child {
        font-size: 20px;
        margin-bottom: 12px;
        color: #3f5fa9;
    }
</style>

<body>

    <header>

        <h1> ATM Machine Simulation </h1>

        <nav class="navbar" data-navbar>

            <a href="lab1.php">Laboratory 1</a>
            <a href="lab2.php">Laboratory 2</a>
            <a href="lab3.php" class="active">Laboratory 3</a>


        </nav>
    </header>

    <section class="container">

        <form action="" method="post">
            <label for="account_name">Account Name:</label>
            <input type="text" name="account_name" required><br><br>

            <label for="initial_balance">Initial Balance:</label>
            <input type="number" name="initial_balance" required><br><br>

            <label for="action">Action:</label>
            <select id="action" name="action">
                <option value="check_balance">Check Balance</option>
                <option value="deposit">Deposit</option>
                <option value="withdraw">Withdraw</option>
            </select><br><br>

            <label for="amount">Amount (for Deposit/Withdraw):</label>
            <input type="number" id="amount" name="amount">
            <input type="submit" name="submit" value="Submit Transaction">
        </form>
        <!-- - amount (number, only for Deposit/Withdraw) -->
        <!-- Add a submit button -->


        <?php if (isset($_POST['submit'])): ?>
            <div class="result">
                <?php

                class ATM
                {
                    private $accountName;
                    private $balance;

                    public function __construct($accountName, $initialBalance)
                    {
                        $this->accountName = $accountName;
                        $this->balance = $initialBalance;
                    }

                    public function getBalance()
                    {
                        return $this->balance;
                    }

                    public function deposit($amount)
                    {
                        $this->balance += $amount;
                    }

                    public function withdraw($amount)
                    {
                        if ($this->balance >= $amount) {
                            $this->balance -= $amount;
                            return true;
                        }
                        return false;
                    }

                    public function getAccountName()
                    {
                        return $this->accountName;
                    }
                }


                if (isset($_POST['submit'])) {
                    $accountName = $_POST['account_name'];
                    $initialBalance = $_POST['initial_balance'];
                    $action = $_POST['action'];
                    $amount = isset($_POST['amount']) ? $_POST['amount'] : 0;

                    $atm = new ATM($accountName, $initialBalance);

                    $actionLabel = "";

                    if ($action == "check_balance") {
                    } elseif ($action == "deposit") {
                    } elseif ($action == "withdraw") {
                    }

                    echo "<h2>Transaction Result</h2>";
                    echo "<h2>Account: " . $atm->getAccountName() . "</h2>";

                    if ($action === 'check_balance') {
                        $actionLabel = "Balance Check";
                    } elseif ($action === 'deposit') {

                        $atm->deposit($amount);
                        $actionLabel = "Deposit of $" . $amount;
                    } elseif ($action === 'withdraw') {

                        if ($atm->withdraw($amount)) {
                            $actionLabel = "Withdrawal of $" . $amount;
                        } else {
                            $actionLabel = "<h2>Withdrawal Failed (Insufficient Funds)</h2>";
                        }
                    }

                    echo "<h2>Action: " . $actionLabel . "</h2>";
                    echo "<h2>New Balance: $" . $atm->getBalance() . "</h2>";
                }


                // TODO: Check if form was submitted
                // TODO: Create ATM object using form data
                // TODO: Perform the selected action (Check Balance, Deposit, Withdraw)
                // TODO: Display appropriate messages and current balance
                ?>
            </div>
        <?php endif; ?>
    </section>

</body>

</html>