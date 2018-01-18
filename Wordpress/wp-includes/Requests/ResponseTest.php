
Fatal error: Uncaught TypeError: Argument 1 passed to tomzx\AutomatedTestGenerator\Generator\ClassGenerator::strStart() must be of the type string, object given, called in E:\Tom\Documents\GIT\coreteks\automated-test-generator\src\tomzx\AutomatedTestGenerator\Generator\ClassGenerator.php on line 361 and defined in E:\Tom\Documents\GIT\coreteks\automated-test-generator\src\tomzx\AutomatedTestGenerator\Generator\ClassGenerator.php:441
Stack trace:
#0 E:\Tom\Documents\GIT\coreteks\automated-test-generator\src\tomzx\AutomatedTestGenerator\Generator\ClassGenerator.php(361): tomzx\AutomatedTestGenerator\Generator\ClassGenerator->strStart(Object(PhpParser\Node\Expr\Variable), '\\')
#1 E:\Tom\Documents\GIT\coreteks\automated-test-generator\src\tomzx\AutomatedTestGenerator\Generator\ClassGenerator.php(337): tomzx\AutomatedTestGenerator\Generator\ClassGenerator->createMethodTest(Object(PhpParser\Node\Stmt\Class_), Object(PhpParser\Node\Stmt\ClassMethod), '1', Object(tomzx\AutomatedTestGenerator\ControlFlowGraph\GraphPath))
#2 E:\To in E:\Tom\Documents\GIT\coreteks\automated-test-generator\src\tomzx\AutomatedTestGenerator\Generator\ClassGenerator.php on line 441
