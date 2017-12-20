<?php

$randoms = array(

	"R_LNUM" 			=> function(){ global $r_lnums; return arand($r_lnums); },
	"R_DNUM"			=> function(){ global $r_dnums; return arand($r_dnums); },
	"R_EXPONENT_DNUMS"	=> function(){ global $r_exponent_dnums; return arand($r_exponent_dnums); },
	"R_HNUM"			=> function(){ global $r_hnums; return arand($r_hnums); },
	"R_BNUM"			=> function(){ global $r_bnums; return arand($r_bnums); },
	"R_LABEL"			=> function(){ global $r_labels; return arand($r_labels); },
	"R_WHITESPACE"		=> function(){ global $r_whitespace; return arand($r_whitespace); },
	"R_TABS_AND_SAPCES"	=> function(){ global $r_tabs_and_spaces; return arand($r_tabs_and_spaces); },
//	"R_TOKENS"			=> function(){ global $r_tokens; return arand($r_tokens); },
	"R_ANY_CHAR"		=> function(){ global $r_any_char; return arand($r_any_char); },
	"R_NEWLINE"			=> function(){ global $r_newline; return arand($r_newline); },
	"R_STRING"			=> function(){ global $r_strings; return arand($r_strings); },
	"R_VARIABLE"		=> function(){ global $r_variables; return arand($r_variables); },

);

$terminals = array(

	"T_INCLUDE" 		=> "include ",
	"T_INCLUDE_ONCE" 	=> "include_once ",
	"T_EVAL" 			=> "eval ",
	"T_REQUIRE"			=> "require ",
	"T_REQUIRE_ONCE"	=> "require_once ",
	"T_LOGICAL_OR"		=> " or ",
	"T_LOGICAL_XOR"		=> " xor ",
	"T_LOGICAL_AND"		=> " and ",
	"T_PRINT"			=> "print ",
	"T_YIELD"			=> "yield ",
	"T_DOUBLE_ARROW"	=> "=>",
	"T_YIELD_FROM"		=> "yield from ",
	"T_PLUS_EQUAL"		=> "+=",
	"T_MINUS_EQUAL"		=> "-=",
	"T_MUL_EQUAL"		=> "*=",
	"T_DIV_EQUAL"		=> "/=",
	"T_CONCAT_EQUAL"	=> ".=",
	"T_MOD_EQUAL"		=> "%=",
	"T_AND_EQUAL"		=> "&=",
	"T_OR_EQUAL"		=> "|=",
	"T_XOR_EQUAL"		=> "^=",
	"T_SL_EQUAL"		=> "<<=",
	"T_SR_EQUAL"		=> ">>=",
	"T_POW_EQUAL"		=> "**=",
	"T_COALESCE"		=> "??",
	"T_BOOLEAN_OR"		=> "|",
	"T_BOOLEAN_AND"		=> "&",
	"T_IS_EQUAL"		=> "==",
	"T_IS_NOT_EQUAL"	=> "!=",
	"T_IS_IDENTICAL"	=> "===",
	"T_IS_NOT_IDENTICAL"	=> "!==",
	"T_SPACESHIP"		=> "<=>",
	"T_IS_SMALLER_OR_EQUAL"	=> "<=",
	"T_IS_GREATER_OR_EQUAL"	=> ">=",
	"T_SL"				=> "<<",
	"T_SR"				=> ">>",
	"T_INSTANCEOF"		=> "instanceof ",
	"T_INC"				=> "++",
	"T_DEC"				=> "--",
	"T_INT_CAST"		=> "(int)",
	"T_DOUBLE_CAST"		=> "(double)",
	"T_STRING_CAST"		=> "(string)",
	"T_ARRAY_CAST"		=> "(array)",
	"T_OBJECT_CAST"		=> "(object)",
	"T_BOOL_CAST"		=> "(bool)",
	"T_UNSET_CAST"		=> "(unset)",
	"T_POW"				=> "**",
	"T_NEW"				=> "new ",
	"T_CLONE"			=> "clone ",
	"T_EXIT"			=> "exit ",
	"T_IF"				=> "if ",
	"T_ELSEIF"			=> "elseif ",
	"T_ELSE"			=> "else ",
	"T_ENDIF"			=> "endif ",
	"T_ECHO"			=> "echo ",
	"T_DO"				=> "do ",
	"T_WHILE"			=> "while ",
	"T_ENDWHILE"		=> "endwhile ",
	"T_FOR"				=> "for ",
	"T_ENDFOR"			=> "endfor ",
	"T_FOREACH"			=> "foreach ",
	"T_ENDFOREACH"		=> "endforeach ",
	"T_DECLARE"			=> "declare ",
	"T_ENDDECLARE"		=> "enddeclare ",
	"T_AS"				=> "as ",
	"T_SWITCH"			=> "switch ",
	"T_ENDSWITCH"		=> "endswitch ",
	"T_CASE"			=> "case ",
	"T_DEFAULT"			=> "default ",
	"T_BREAK"			=> "break ",
	"T_CONTINUE"		=> "continue ",
	"T_GOTO"			=> "goto ",
	"T_FUNCTION"		=> "function ",
	"T_CONST"			=> "const ",
	"T_RETURN"			=> "return ",
	"T_TRY"				=> "try ",
	"T_CATCH"			=> "catch ",
	"T_FINALLY"			=> "finally ",
	"T_THROW"			=> "throw ",
	"T_USE"				=> "use ",
	"T_INSTEADOF"		=> "insteadof ",
	"T_GLOBAL"			=> "global ",
	"T_STATIC"			=> "static ",
	"T_ABSTRACT"		=> "abstract ",
	"T_FINAL"			=> "final ",
	"T_PRIVATE"			=> "private ",
	"T_PROTECTED"		=> "protected ",
	"T_PUBLIC"			=> "public ",
	"T_VAR"				=> "var ",
	"T_UNSET"			=> "unset ",
	"T_ISSET"			=> "isset ",
	"T_EMPTY"			=> "empty ",
	"T_HALT_COMPILER"	=> "__halt_compiler ",
	"T_CLASS"			=> "class ",
	"T_TRAIT"			=> "trait ",
	"T_INTERFACE"		=> "interface ",
	"T_EXTENDS"			=> "extends ",
	"T_IMPLEMENTS"		=> "implements ",
	"T_OBJECT_OPERATOR"	=> "->",
	"T_LIST"			=> "list ",
	"T_ARRAY"			=> "array ",
	"T_CALLABLE"		=> "callable ",
	"T_LINE"			=> " __LINE__ ",
	"T_FILE"			=> " __FILE__ ",
	"T_DIR"				=> " __DIR__ ",
	"T_CLASS_C"			=> " __CLASS__ ",
	"T_TRAIT_C"			=> " __TRAIT__ ",
	"T_METHOD_C"		=> " __METHOD__ ",
	"T_FUNC_C"			=> " __FUNCTION__ ",
//	"T_COMMENT"			=> "comment ",
//	"T_DOC_COMMENT"		=> "doc comment ",
	"T_OPEN_TAG"		=> "<?php ",
	"T_OPEN_TAG_WITH_ECHO"	=> "<?= ",
	"T_CLOSE_TAG"		=> " ?>",
	"T_WHITESPACE"		=> " ",
	"T_START_HEREDOC"	=> "<<<HEREDOC ",
	"T_END_HEREDOC"		=> "HEREDOC ",
	"T_DOLLAR_OPEN_CURLY_BRACES"	=> "\${",
	"T_CURLY_OPEN"		=> "{\$",
	"T_PAAMAYIM_NEKUDOTAYIM"	=> "::",
	"T_NAMESPACE"		=> "namespace ",
	"T_NS_C"			=> " __NAMESPACE__ ",
	"T_NS_SEPARATOR"	=> "\\",
	"T_ELLIPSIS"		=> "...",
);

$nonterminals = array(

	"N_start" => [
		["T_OPEN_TAG", "N_top_statement_list", "T_CLOSE_TAG"],
		/*["T_OPEN_TAG_WITH_ECHO", "N_top_statement_list", "T_CLOSE_TAG"],*/
	],

	"N_reserved_non_modifiers" => [
		["T_INCLUDE"], ["T_INCLUDE_ONCE"], ["T_EVAL"], ["T_REQUIRE"], ["T_REQUIRE_ONCE"], ["T_LOGICAL_OR"],
		["T_LOGICAL_XOR"], ["T_LOGICAL_AND"], ["T_INSTANCEOF"], ["T_NEW"], ["T_CLONE"], ["T_EXIT"], ["T_IF"],
		["T_ELSEIF"], ["T_ELSE"], ["T_ENDIF"], ["T_ECHO"], ["T_DO"], ["T_WHILE"], ["T_ENDWHILE"], ["T_FOR"],
		["T_ENDFOR"], ["T_FOREACH"], ["T_ENDFOREACH"], ["T_DECLARE"], ["T_ENDDECLARE"], ["T_AS"], ["T_TRY"],
		["T_CATCH"], ["T_FINALLY"], ["T_THROW"], ["T_USE"], ["T_INSTEADOF"], ["T_GLOBAL"], ["T_VAR"],
		["T_UNSET"], ["T_ISSET"], ["T_EMPTY"], ["T_CONTINUE"], ["T_GOTO"], ["T_FUNCTION"], ["T_CONST"],
		["T_RETURN"], ["T_PRINT"], ["T_YIELD"], ["T_LIST"], ["T_SWITCH"], ["T_ENDSWITCH"], ["T_CASE"],
		["T_DEFAULT"], ["T_BREAK"], ["T_ARRAY"], ["T_CALLABLE"], ["T_EXTENDS"], ["T_IMPLEMENTS"], ["T_NAMESPACE"],
		["T_TRAIT"], ["T_INTERFACE"], ["T_CLASS"], ["T_CLASS_C"], ["T_TRAIT_C"], ["T_FUNC_C"], ["T_METHOD_C"],
		["T_LINE"], ["T_FILE"], ["T_DIR"], ["T_NS_C"], ["T_HALT_COMPILER"],
	],

	"N_semi_reserved" => [
		["N_reserved_non_modifiers"],
		["T_STATIC"], ["T_ABSTRACT"], ["T_FINAL"], ["T_PRIVATE"], ["T_PROTECTED"], ["T_PUBLIC"],
	],

	"N_identifier" => [
		["R_STRING"], ["N_semi_reserved"],
	],

	"N_top_statement_list" => [
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		["N_top_statement_list", "N_top_statement"],
		[/*empty*/""],
	],

	"N_namespace_name" => [
		["R_STRING"],
		["N_namespace_name", "T_NS_SEPARATOR", "R_STRING"],
	],

	"N_name" => [""],
/*
	"N_name" => [
		["N_namespace_name"],
		["T_NAMESPACE", "T_NS_SEPARATOR", "N_namespace_name"],
		["T_NS_SEPARATOR", "N_namespace_name"],
	],
*/

	"N_top_statement" => [
		["N_statement"],
/*		["N_function_declaration_statement"],
		["N_class_declaration_statement"],
		["N_trait_declaration_statement"],
		["N_interface_declaration_statement"],
		//["T_HALT_COMPILER", "(", ")", ";\n"],
		["T_NAMESPACE", "N_namespace_name", ";\n"],
		["T_NAMESPACE", "N_namespace_name", "{", "N_top_statement_list", "}"],
		["T_NAMESPACE", "{", "}"],
		["T_USE", "N_mixed_group_use_declaration", ";\n"],
		["T_USE", "N_use_type", "N_group_use_declaration", ";\n"],
		["T_USE", "N_use_declarations", ";\n"],
		["T_USE", "N_use_type", "N_use_declarations", ";\n"],
		["T_CONST", "N_const_list", ";\n"],*/
	],

	"N_use_type" => [
		["T_FUNCTION"], ["T_CONST"],
	],

	"N_group_use_declaration" => [
		["N_namespace_name", "T_NS_SEPARATOR", "{", "N_unprefixed_use_declarations", "}"],
		["T_NS_SEPARATOR", "N_namespace_name", "T_NS_SEPARATOR", "{", "unprefixed_use_declarations", "}"],
	],

	"N_mixed_group_use_declaration" => [
		["N_namespace_name", "T_NS_SEPARATOR", "{", "N_inline_use_declaration", "}"],
		["T_NS_SEPARATOR", "N_namespace_name", "T_NS_SEPARATOR", "{", "N_inline_use_declarations", "}"],
	],

	"N_inline_use_declarations" => [
		["N_inline_use_declaration", ",", "N_inline_use_declaration"],
		["N_inline_use_declaration"],
	],

	"N_unprefixed_use_declarations" => [
		["N_unprefixed_use_declaration", ",", "unprefixed_use_declaration"],
		["N_unprefixed_use_declaration"],
	],

	"N_use_declarations" => [
		["N_use_declarations", ",", "N_use_declaration"],
		["N_use_declaration"],
	],

	"N_inline_use_declaration" => [
		["N_unprefixed_use_declaration"],
		["N_use_type", "N_unprefixed_use_declaration"],
	],

	"N_unprefixed_use_declaration" => [
		["N_namespace_name"],
		["N_namespace_name", "T_AS", "R_STRING"],
	],

	"N_use_declaration" => [
		["N_unprefixed_use_declaration"],
		["T_NS_SEPARATOR", "N_unprefixed_use_declaration"],
	],

	"N_const_list" => [
		["N_const_list", ",", "N_const_decl"],
		["N_const_decl"],
	],

	"N_inner_statement_list" => [
		["N_inner_statement_list", "N_inner_statement"],
		[/*empty*/""],
	],

	"N_inner_statement" => [
		["N_statement"],
		["N_function_declaration_statement"],
		["N_class_declaration_statement"],
		["N_trait_declaration_statement"],
		["N_interface_declaration_statement"],
		//["T_HALT_COMPILER", "(", ")", ";\n"],
	],

	"N_statement" => [
		["{", "N_inner_statement_list", "}"],
		["N_if_stmt"],
		["N_alt_if_stmt"],
		["T_WHILE", "(", "N_expr", ")", "N_while_statement"],
		["T_DO", "N_statement", "T_WHILE", "(", "N_expr", ")", ";\n"],
		["T_FOR", "(", "N_for_exprs", ";\n", "N_for_exprs", ";\n", "N_for_exprs", ")", "N_for_statement"],
		["T_SWITCH", "(", "N_expr", ")", "N_switch_case_list"],
		["T_BREAK", "N_optional_expr", ";\n"],
		["T_CONTINUE", "N_optional_expr", ";\n"],
		["T_RETURN", "N_optional_expr", ";\n"],
		["T_GLOBAL", "N_global_var_list", ";\n"],
		["T_STATIC", "N_static_var_list", ";\n"],
		["T_ECHO", "N_echo_expr_list", ";\n"],
//		["T_INLINE_HTML"],
		["N_expr", ";\n"],
		["T_UNSET", "(", "N_unset_variables", ")", ";\n"],
		["T_FOREACH", "(", "N_expr", "T_AS", "N_foreach_variable", "T_DOUBLE_ARROW", "N_foreach_variable", ")", "N_foreach_statement"],
		["T_DECLARE", "(", "N_const_list", ")", "N_declare_statement"],
		[";\n"],
		["T_TRY", "{", "N_inner_statement_list", "}", "N_catch_list", "N_finally_statement"],
		["T_THROW", "N_expr", ";\n"],
		["T_GOTO", "R_STRING", ";\n"],
		["R_STRING", ":"],
	],

	"N_catch_list" => [
		[/*empty*/""],
		["N_catch_list", "T_CATCH", "(", "N_name", "R_VARIABLE", ")", "{", "N_inner_statement_list", "}"],
	],

	"N_finally_statement" => [
		[/*empty*/""],
		["T_FINALLY", "{", "N_inner_statement_list", "}"],
	],

	"N_unset_variables" => [
		["N_unset_variable"],
		["N_unset_variables", ",", "N_unset_variable"],
	],

	"N_unset_variable" => [
		["N_variable"],
	],

	"N_function_declaration_statement" => [
		["N_function", "N_returns_ref", "R_STRING", "N_backup_doc_comment", "(", "N_parameter_list", ")", "N_return_type", "{", "N_inner_statement", "}"],
	],

	"N_is_reference" => [
		[/*empty*/""], ["&"],
	],

	"N_is_variadic" => [
		[/*empty*/""], ["T_ELLIPSIS"],
	],

	"N_class_declaration_statement" => [
		["N_class_modifiers", "T_CLASS", "R_STRING", "N_extends_from", "N_implements_list", "N_backup_doc_comment", "{", "N_class_statement_list", "}"],
		["T_CLASS", "R_STRING", "N_extends_from", "N_implements_list", "N_backup_doc_comment", "{", "N_class_statement_list", "}"],
	],

	"N_class_modifiers" => [
		["N_class_modifier"],
		["N_class_modifiers", "N_class_modifier"],
	],

	"N_class_modifier" => [
		["T_ABSTRACT"],
		["T_FINAL"],
	],

	"N_trait_declaration_statement" => [
		["T_TRAIT", "R_STRING", "N_backup_doc_comment", "{", "N_class_statement_list", "}"],
	],

	"N_interface_declaration_statement" => [
		["T_INTERFACE", "R_STRING", "N_interface_extends_list", "N_backup_doc_comment", "{", "N_class_statement_list", "}"],
	],

	"N_extends_from" => [
		[/*empty*/""],
		["T_EXTENDS", "N_name"],
	],

	"N_interface_extends_list" => [
		[/*empty*/""],
		["T_EXTENDS", "N_name_list"],
	],

	"N_implements_list" => [
		[/*empty*/""],
		["T_IMPLEMENTS", "N_name_list"],
	],

	"N_foreach_variable" => [
		["N_variable"],
		["&", "N_variable"],
		["T_LIST", "(", "N_assignment_list", ")"],
	],

	"N_for_statement" => [
		["N_statement"],
		[":", "N_inner_statement_list", "T_ENDFOREACH", ";\n"],
	],

	"N_foreach_statement" => [
		["N_statement"],
		[":", "N_inner_statement_list", "T_ENDFOREACH", ";\n"],
	],

	"N_declare_statement" => [
		["N_statement"],
		[":", "N_inner_statement_list", "T_ENDDECLARE", ";\n"],
	],

	"N_switch_case_list" => [
		["{", "N_case_list", "}"],
		["{", ";\n", "N_case_list", "}"],
		[":", "N_case_list", "T_ENDSWITCH", ";\n"],
		[":", ";\n", "N_case_list", "T_ENDSWITCH", ";\n"],
	],

	"N_case_list" => [
		[/*empty*/""],
		["N_case_list", "T_CASE", "N_expr", "N_case_separator", "N_inner_statement_list"],
		["N_case_list", "T_DEFAULT", "N_case_separator", "N_inner_statement_list"],
	],

	"N_case_separator" => [
		[":"], [";\n"],
	],

	"N_while_statement" => [
		["N_statement"],
		[":", "N_inner_statement_list", "T_ENDWHILE", ";\n"],
	],

	"N_if_stmt_without_else" => [
		["T_IF", "(", "N_expr", ")", "N_statement"],
		["N_if_stmt_without_else", "T_ELSEIF", "(", "N_expr", ")", "N_statement"],
	],

	"N_if_stmt" => [
		["N_if_stmt_without_else"], // %prec T_NOELSE ???
		["N_if_stmt_without_else", "T_ELSE", "N_statement"],
	],

	"N_alt_if_stmt_without_else" => [
		["T_IF", "(", "N_expr", ")", ":", "N_inner_statement_list"],
		["N_alt_if_stmt_without_else", "T_ELSEIF", "(", "N_expr", ")", ":", "N_inner_statement_list"],
	],

	"N_alt_if_stmt" => [
		["N_alt_if_stmt_without_else", "T_ENDIF", ";\n"],
		["N_alt_if_stmt_without_else", "T_ELSE", ":", "N_inner_statement_list", "T_ENDIF", ";\n"],
	],

	"N_parameter_list" => [
		["N_non_empty_parameter_list"],
		[/*empty*/""],
	],

	"N_non_empty_parameter_list" => [
		["N_parameter"],
		["N_non_empty_parameter_list", ",", "N_parameter"],
	],

	"N_parameter" => [
		["N_optional_type", "N_is_reference", "N_is_variadic", "R_VARIABLE"],
		["N_optional_type", "N_is_reference", "N_is_variadic", "R_VARIABLE", "=", "N_expr"],
	],

	"N_optional_type" => [
		[/*empty*/""],
		["N_type"],
	],

	"N_type" => [
		["T_ARRAY"],
		["T_CALLABLE"],
		["N_name"],
	],

	"N_return_type" => [
		[/*empty*/""],
		[":", "N_type"],
	],

	"N_argument_list" => [
		["(", ")"],
		["(", "N_non_empty_argument_list", ")"],
	],

	"N_non_empty_argument_list" => [
		["N_argument"],
		["N_non_empty_argument_list", ",", "N_argument"],
	],

	"N_argument" => [
		["N_expr"],
		["T_ELLIPSIS", "N_expr"],
	],

	"N_global_var_list" => [
		["N_global_var_list", ",", "N_global_var"],
		["N_global_var"],
	],

	"N_global_var" => [
		["N_simple_variable"],
	],

	"N_static_var_list" => [
		["N_static_var_list", ",", "N_static_var"],
		["N_static_var"],
	],

	"N_static_var" => [
		["R_VARIABLE"],
		["R_VARIABLE", "=", "N_expr"],
	],

	"N_class_statement_list" => [
		["N_class_statement_list", "N_class_statement"],
		[/*empty*/""],
	],

	"N_class_statement" => [
		["N_variable_modifiers", "N_property_list", ";\n"],
		["T_CONST", "N_class_const_list", ";\n"],
		["T_USE", "N_name_list", "N_trait_adaptations"],
		["N_method_modifiers", "N_function", "N_returns_ref", "N_identifier", "N_backup_doc_comment", "(", "N_parameter_list", ")", "N_return_type", "N_method_body"],
	],

	"N_name_list" => [
		["N_name"],
		["N_name_list", ",", "N_name"],
	],

	"N_trait_adaptations" => [
		[";\n"],
		["{", "}"],
		["{", "N_trait_adaptation_list", "}"],
	],

	"N_trait_adaptation_list" => [
		["N_trait_adaptation"],
		["N_trait_adaptation_list", "N_trait_adaptation"],
	],

	"N_trait_adaptation" => [
		["N_trait_precedence", ";\n"],
		["N_trait_alias", ";\n"],
	],

	"N_trait_precedence" => [
		["N_absolute_trait_method_reference", "T_INSTEADOF", "N_name_list"],
	],

	"N_trait_alias" => [
		["N_trait_method_reference", "T_AS", "R_STRING"],
		["trait_method_reference", "T_AS", "N_reserved_non_modifiers"],
		["trait_method_reference", "T_AS", "N_member_modifier", "N_identifier"],
		["trait_method_reference", "T_AS", "N_member_modifier"],
	],

	"N_trait_method_reference" => [
		["N_identifier"],
		["N_absolute_trait_method_reference"],
	],

	"N_absolute_trait_method_reference" => [
		["N_name", "T_PAAMAYIM_NEKUDOTAYIM", "N_identifier"],
	],

	"N_method_body" => [
		[";\n"],
		["{", "N_inner_statement_list", "}"],
	],

	"N_variable_modifiers" => [
		["N_non_empty_member_modifiers"],
		["T_VAR"],
	],

	"N_method_modifiers" => [
		[/*empty*/""],
		["N_non_empty_member_modifiers"],
	],

	"N_non_empty_member_modifiers" => [
		["N_member_modifier"],
		["N_non_empty_member_modifiers", "N_member_modifier"],
	],

	"N_member_modifier" => [
		["T_PUBLIC"], ["T_PROTECTED"], ["T_PRIVATE"], ["T_STATIC"], ["T_ABSTRACT"], ["T_FINAL"],
	],

	"N_property_list" => [
		["N_property_list", ",", "N_property"],
		["N_property"],
	],

	"N_property" => [
		["R_VARIABLE", "N_backup_doc_comment"],
		["R_VARIABLE", "=", "N_expr", "N_backup_doc_comment"],
	],

	"N_class_const_list" => [
		["N_class_const_list", ",", "N_class_const_decl"],
		["N_class_const_decl"],
	],

	"N_class_const_decl" => [
		["N_identifier", "=", "N_expr"],
	],

	"N_const_decl" => [
		["R_STRING", "=", "N_expr"],
	],

	"N_echo_expr_list" => [
		["N_echo_expr_list", ",", "N_echo_expr"],
		["N_echo_expr"],
	],

	"N_echo_expr" => [
		["N_expr"],
	],

	"N_for_exprs" => [
		[/*empty*/""],
		["N_non_empty_for_exprs"],
	],

	"N_non_empty_for_exprs" => [
		["N_non_empty_for_exprs", ",", "N_expr"],
		["N_expr"],
	],

	"N_anonymous_class" => [
		["T_CLASS"],
		["N_extends_from", "N_implements_list", "N_backup_doc_comment", "{", "N_class_statement_list", "}"],
	],

	"N_new_expr" => [
		["T_NEW", "N_class_name_reference", "N_ctor_arguments"],
		["T_NEW", "N_anonymous_class"],
	],

	"N_expr_without_variable" => [
		["T_LIST", "(", "N_assignment_list", ")", "=", "N_expr"],
		["N_variable", "=", "N_expr"],
		["N_variable", "=", "&", "N_expr"],
		["T_CLONE", "N_expr"],
		["N_variable", "T_PLUS_EQUAL", "N_expr"],
		["N_variable", "T_MINUS_EQUAL", "N_expr"],
		["N_variable", "T_MUL_EQUAL", "N_expr"],
		["N_variable", "T_POW_EQUAL", "N_expr"],
		["N_variable", "T_DIV_EQUAL", "N_expr"],
		["N_variable", "T_CONCAT_EQUAL", "N_expr"],
		["N_variable", "T_MOD_EQUAL", "N_expr"],
		["N_variable", "T_AND_EQUAL", "N_expr"],
		["N_variable", "T_OR_EQUAL", "N_expr"],
		["N_variable", "T_XOR_EQUAL", "N_expr"],
		["N_variable", "T_SL_EQUAL", "N_expr"],
		["N_variable", "T_SR_EQUAL", "N_expr"],
		["N_variable", "T_INC"],
		["N_variable", "T_DEC"],
		["T_INC", "N_variable"],
		["T_DEC", "N_variable"],
		["N_variable", "T_PLUS_EQUAL", "N_expr"],
		["N_expr", "T_BOOLEAN_OR", "N_expr"],
		["N_expr", "T_BOOLEAN_AND", "N_expr"],
		["N_expr", "T_LOGICAL_OR", "N_expr"],
		["N_expr", "T_LOGICAL_AND", "N_expr"],
		["N_expr", "T_LOGICAL_XOR", "N_expr"],
		["N_expr", "|", "N_expr"],
		["N_expr", "&", "N_expr"],
		["N_expr", "^", "N_expr"],
		["N_expr", ".", "N_expr"],
		["N_expr", "+", "N_expr"],
		["N_expr", "-", "N_expr"],
		["N_expr", "*", "N_expr"],
		["N_expr", "T_POW", "N_expr"],
		["N_expr", "/", "N_expr"],
		["N_expr", "%", "N_expr"],
		["N_expr", "T_SL", "N_expr"],
		["N_expr", "T_SR", "N_expr"],
		["+", "N_expr"],
		["-", "N_expr"],
		["!", "N_expr"],
		["~", "N_expr"],
		["N_expr", "T_IS_IDENTICAL", "N_expr"],
		["N_expr", "T_IS_NOT_IDENTICAL", "N_expr"],
		["N_expr", "T_IS_EQUAL", "N_expr"],
		["N_expr", "T_IS_NOT_EQUAL", "N_expr"],
		["N_expr", "<", "N_expr"],
		["N_expr", "T_IS_SMALLER_OR_EQUAL", "N_expr"],
		["N_expr", ">", "N_expr"],
		["N_expr", "T_IS_GREATER_OR_EQUAL", "N_expr"],
		["N_expr", "T_SPACESHIP", "N_expr"],
		["N_expr", "T_INSTANCEOF", "N_class_name_reference"],
		["(", "N_expr", ")"],
		["N_new_expr"],
		["N_expr", "?", "N_expr", ":", "N_expr"],
		["N_expr", "?", ":", "N_expr"],
		["N_expr", "T_COALESCE", "N_expr"],
		["N_internal_functions_in_yacc"],
		["T_INT_CAST", "N_expr"],
		["T_DOUBLE_CAST", "N_expr"],
		["T_STRING_CAST", "N_expr"],
		["T_ARRAY_CAST", "N_expr"],
		["T_OBJECT_CAST", "N_expr"],
		["T_BOOL_CAST", "N_expr"],
		["T_UNSET_CAST", "N_expr"],
		["T_EXIT", "N_exit_expr"],
		["@", "N_expr"],
		["N_scalar"],
		["`", "N_backticks_expr", "`"],
		["T_PRINT", "N_expr"],
		["T_YIELD"],
		["T_YIELD", "N_expr"],
		["T_YIELD", "N_expr", "T_DOUBLE_ARROW", "N_expr"],
		["T_YIELD_FROM", "N_expr"],
		["N_function", "N_returns_ref", "N_backup_doc_comment", "(", "N_parameter_list", ")", "N_lexical_vars", "N_return_type", "{", "N_inner_statement_list", "}"],
		["T_STATIC", "N_function", "N_returns_ref", "N_backup_doc_comment", "(", "N_parameter_list", ")", "N_lexical_vars", "N_return_type", "{", "N_inner_statement_list", "}"],
	],

	"N_function" => [
		["T_FUNCTION"],
	],

	"N_backup_doc_comment" => [
		[/*empty*/""],
	],

	"N_returns_ref" => [
		[/*empty*/""],
		["&"],
	],

	"N_lexical_vars" => [
		[/*empty*/""],
		["T_USE", "(", "N_lexical_var_list", ")"],
	],

	"N_lexical_var_list" => [
		["N_lexical_var_list", ",", "N_lexical_var"],
		["N_lexical_var"],
	],

	"N_lexical_var" => [
		["R_VARIABLE"],
		["&", "R_VARIABLE"],
	],

	"N_function_call" => [
		["N_name", "N_argument_list"],
		["N_class_name", "T_PAAMAYIM_NEKUDOTAYIM", "N_member_name", "N_argument_list"],
		["N_variable_class_name", "T_PAAMAYIM_NEKUDOTAYIM", "N_member_name", "N_argument_list"],
		["N_callable_expr", "N_argument_list"],
	],

	"N_class_name" => [
		["T_STATIC"],
		["N_name"],
	],

	"N_class_name_reference" => [
		["N_class_name"],
		["N_new_variable"],
	],

	"N_exit_expr" => [
		[/*empty*/""],
		["(", "N_optional_expr", ")"],
	],

	"N_backticks_expr" => [
		[/*empty*/""],
//		["T_ENCAPSED_AND_WHITESPACE"],
		["N_encaps_list"],
	],

	"N_ctor_arguments" => [
		[/*empty*/""],
		["N_argument_list"],
	],

	"N_dereferencable_scalar" => [
		["T_ARRAY", "(", "N_array_pair_list", ")"],
		["[", "N_array_pair_list", "]"],
//		["T_CONSTANT_ENCAPSED_STRING"],
	],

	"N_scalar" => [
		["R_LNUM"], ["R_DNUM"], ["T_LINE"], ["T_FILE"], ["T_DIR"], ["T_TRAIT_C"], ["T_METHOD_C"], ["T_FUNC_C"], ["T_NS_C"], ["T_CLASS_C"],
//		["T_START_HEREDOC", "T_ENCAPSED_AND_WHITESPACE", "T_END_HEREDOC"],
		["T_START_HEREDOC", "T_END_HEREDOC"],
		["\"", "N_encaps_list", "\""],
//		["T_START_HEREDOC", "N_encaps_list", "T_END_HEREDOC"],
		["N_dereferencable_scalar"],
		["N_constant"],
	],

	"N_constant" => [
		["N_name"],
		["N_class_name", "T_PAAMAYIM_NEKUDOTAYIM", "N_identifier"],
		["N_variable_class_name", "T_PAAMAYIM_NEKUDOTAYIM", "N_identifier"],
	],

	"N_possible_comma" => [
		[/*empty*/""], [","],
	],

	"N_expr" => [
		["N_variable"],
		["N_expr_without_variable"],
	],

	"N_optional_expr" => [
		[/*empty*/""],
		["N_expr"],
	],

	"N_variable_class_name" => [
		["N_dereferencable"],
	],

	"N_dereferencable" => [
		["N_variable"],
		["(", "N_expr", ")"],
		["N_dereferencable_scalar"],
	],

	"N_callable_expr" => [
		["N_callable_variable"],
		["(", "N_expr", ")"],
		["N_dereferencable_scalar"],
	],

	"N_callable_variable" => [
		["N_simple_variable"],
		["N_dereferencable", "[", "N_optional_expr", "]"],
		["N_constant", "[", "N_optional_expr", "]"],
		["N_dereferencable", "{", "N_expr", "}"],
		["N_dereferencable", "T_OBJECT_OPERATOR", "N_property_name", "N_argument_list"],
		["N_function_call"],
	],

	"N_variable" => [
		["N_callable_variable"],
		["N_static_member"],
		["N_dereferencable", "T_OBJECT_OPERATOR", "N_property_name"],
	],

	"N_simple_variable" => [
		["R_VARIABLE"],
		["\$", "{", "N_expr", "}"],
		["\$", "N_simple_variable"],
	],

	"N_static_member" => [
		["N_class_name", "T_PAAMAYIM_NEKUDOTAYIM", "N_simple_variable"],
		["N_variable_class_name", "T_PAAMAYIM_NEKUDOTAYIM", "N_simple_variable"],
	],

	"N_new_variable" => [
		["N_simple_variable"],
		["N_new_variable", "[", "N_optional_expr", "]"],
		["N_new_variable", "{", "N_expr", "}"],
		["N_new_variable", "T_OBJECT_OPERATOR", "N_property_name"],
		["N_class_name", "T_PAAMAYIM_NEKUDOTAYIM", "N_simple_variable"],
		["N_new_variable", "T_PAAMAYIM_NEKUDOTAYIM", "N_simple_variable"],
	],

	"N_member_name" => [
		["N_identifier"],
		["{", "N_expr", "}"],
		["N_simple_variable"],
	],

	"N_property_name" => [
		["R_STRING"],
		["{", "N_expr", "}"],
		["N_simple_variable"],
	],

	"N_assignment_list" => [
		["N_assignment_list", ",", "N_assignment_list_element"],
		["N_assignment_list_element"],
	],

	"N_assignment_list_element" => [
		["N_variable"],
		["T_LIST", "(", "N_assignment_list", ")"],
		[/*empty*/""],
	],

	"N_array_pair_list" => [
		[/*empty*/""],
		["N_non_empty_array_pair_list", "N_possible_comma"],
	],

	"N_non_empty_array_pair_list" => [
		["N_non_empty_array_pair_list", ",", "N_array_pair"],
		["N_array_pair"],
	],

	"N_array_pair" => [
		["N_expr", "T_DOUBLE_ARROW", "N_expr"],
		["N_expr"],
		["N_expr", "T_DOUBLE_ARROW", "&", "N_variable"],
		["&", "N_variable"],
	],

	"N_encaps_list" => [
		["N_encaps_list", "N_encaps_var"],
//		["N_encaps_list", "T_ENCAPSED_AND_WHITESPACE"],
		["N_encaps_var"],
//		["T_ENCAPSED_AND_WHITESPACE", "N_encaps_var"],
	],

	"N_encaps_var" => [
		["R_VARIABLE"],
		["R_VARIABLE", "[", "N_encaps_var_offset", "]"],
		["R_VARIABLE", "T_OBJECT_OPERATOR", "R_STRING"],
		["T_DOLLAR_OPEN_CURLY_BRACES", "N_expr", "}"],
		["T_DOLLAR_OPEN_CURLY_BRACES", "R_STRING", "}"],
		["T_DOLLAR_OPEN_CURLY_BRACES", "R_STRING", "[", "N_expr", "]", "}"],
		["T_CURLY_OPEN", "N_variable", "}"],
	],

	"N_encaps_var_offset" => [
		["R_STRING"],
//		["T_NUM_STRING"],
		["R_VARIABLE"],
	],

	"N_internal_functions_in_yacc" => [
		["T_ISSET", "(", "N_isset_variables", ")"],
		["T_EMPTY", "(", "N_expr", ")"],
		["T_INCLUDE", "N_expr"],
		["T_INCLUDE_ONCE", "N_expr"],
		["T_EVAL", "(", "N_expr", ")"],
		["T_REQUIRE", "N_expr"],
		["T_REQUIRE_ONCE", "N_expr"],
	],

	"N_isset_variables" => [
		["N_isset_variable"],
		["N_isset_variables", ",", "N_isset_variable"],
	],

	"N_isset_variable" => [
		["N_expr"],
	],

);


